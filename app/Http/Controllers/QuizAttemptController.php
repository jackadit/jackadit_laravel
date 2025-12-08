<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class QuizAttemptController extends Controller implements HasMiddleware
{
    /**
     * ✅ Définition des middlewares Laravel 11+
     */
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('course.ownership', only: ['instructorIndex', 'instructorShow']),
            new Middleware('course.access', except: ['instructorIndex', 'instructorShow']),
        ];
    }

    /**
     * ✅ Liste tentatives (instructeur)
     */
    public function instructorIndex(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $attempts = $quiz->attempts()
            ->with('user:id,name,email')
            ->latest()
            ->paginate(20);

        $stats = [
            'total_attempts' => $attempts->total(),
            'avg_score' => round($quiz->attempts()->avg('score'), 2),
            'pass_rate' => $attempts->total() > 0
                ? round(($quiz->attempts()->where('is_passed', true)->count() / $attempts->total()) * 100, 2)
                : 0,
            'avg_time' => round($quiz->attempts()->avg('time_spent') / 60, 2), // minutes
        ];

        return view('quiz-attempts.instructor-index', compact('course', 'lesson', 'quiz', 'attempts', 'stats'));
    }

    /**
     * ✅ Détail tentative (instructeur)
     */
    public function instructorShow(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $attempt->load(['user', 'quiz.questions.answers']);

        return view('quiz-attempts.instructor-show', compact('course', 'lesson', 'quiz', 'attempt'));
    }

    /**
     * ✅ Mes tentatives (étudiant)
     */
    public function myAttempts(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $attempts = auth()->user()
            ->quizAttempts()
            ->where('quiz_id', $quiz->id)
            ->with('quiz')
            ->latest()
            ->paginate(10);

        return view('quiz-attempts.my-attempts', compact('course', 'lesson', 'quiz', 'attempts'));
    }

    /**
     * Démarrer une tentative
     */
    public function start(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $user = auth()->user();

        // Vérifications
        if (!$quiz->is_active) {
            return back()->with('error', '❌ Ce quiz n\'est pas disponible.');
        }

        if (!$quiz->canUserAttempt($user->id)) {
            return back()->with('error', '❌ Vous avez atteint le nombre maximum de tentatives (' . $quiz->max_attempts . ').');
        }

        // Tentative en cours ?
        $ongoingAttempt = $quiz->attempts()
            ->where('user_id', $user->id)
            ->whereNull('completed_at')
            ->first();

        if ($ongoingAttempt) {
            return redirect()
                ->route('student.quizzes.attempts.take', [$course, $lesson, $quiz, $ongoingAttempt])
                ->with('info', '⚠️ Vous avez une tentative en cours.');
        }

        // Créer nouvelle tentative
        $attempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'user_id' => $user->id,
            'answers' => [],
            'total_points' => $quiz->totalPoints(),
            'started_at' => now(),
        ]);

        return redirect()
            ->route('student.quizzes.attempts.take', [$course, $lesson, $quiz, $attempt])
            ->with('success', '✅ Quiz démarré ! Bonne chance 🍀');
    }

    /**
     * Passer le quiz
     */
    public function take(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeAttempt($attempt);

        // Quiz déjà complété ?
        if ($attempt->completed_at) {
            return redirect()
                ->route('student.quizzes.attempts.result', [$course, $lesson, $quiz, $attempt])
                ->with('info', 'Quiz déjà complété.');
        }

        // Temps écoulé ?
        if ($quiz->time_limit && $attempt->isExpired()) {
            $attempt->autoSubmit();

            return redirect()
                ->route('student.quizzes.attempts.result', [$course, $lesson, $quiz, $attempt])
                ->with('warning', '⏰ Temps écoulé ! Le quiz a été automatiquement soumis.');
        }

        // Charger questions
        $questions = $quiz->shuffle_questions
            ? $quiz->questions()->with('answers')->inRandomOrder()->get()
            : $quiz->questions()->with('answers')->orderBy('order')->get();

        $timeRemaining = $quiz->time_limit ? $attempt->remainingTime() : null;

        return view('quiz-attempts.take', compact(
            'course',
            'lesson',
            'quiz',
            'attempt',
            'questions',
            'timeRemaining'
        ));
    }

    /**
     * Sauvegarder brouillon (AJAX)
     */
    public function saveDraft(Request $request, Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeAttempt($attempt);

        if ($attempt->completed_at) {
            return response()->json(['error' => 'Quiz déjà complété'], 400);
        }

        $answers = $request->input('answers', []);
        $attempt->update(['answers' => $answers]);

        return response()->json([
            'success' => true,
            'message' => '💾 Brouillon sauvegardé',
            'saved_at' => now()->format('H:i:s'),
        ]);
    }

    /**
     * Soumettre le quiz
     */
    public function submit(Request $request, Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeAttempt($attempt);

        if ($attempt->completed_at) {
            return back()->with('error', '❌ Ce quiz a déjà été soumis.');
        }

        $validated = $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            // Enregistrer réponses
            $attempt->update([
                'answers' => $validated['answers'],
                'completed_at' => now(),
            ]);

            // Calculer temps
            $timeSpent = now()->diffInSeconds($attempt->started_at);
            $attempt->update(['time_spent' => $timeSpent]);

            // Calculer score
            $attempt->calculateScore();

            // Mettre à jour progression
            $this->updateLessonProgress($attempt);

            DB::commit();

            return redirect()
                ->route('student.quizzes.attempts.result', [$course, $lesson, $quiz, $attempt])
                ->with('success', '✅ Quiz soumis avec succès !');

        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', '❌ Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Afficher résultat
     */
    public function result(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeAttempt($attempt);

        $attempt->load('quiz.questions.answers');

        return view('quiz-attempts.result', compact('course', 'lesson', 'quiz', 'attempt'));
    }

    /**
     * Revoir les réponses
     */
    public function review(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeAttempt($attempt);

        if (!$quiz->show_correct_answers) {
            return back()->with('error', '❌ La révision n\'est pas autorisée pour ce quiz.');
        }

        $attempt->load('quiz.questions.answers');

        return view('quiz-attempts.review', compact('course', 'lesson', 'quiz', 'attempt'));
    }

    // ========================================
    // MÉTHODES PRIVÉES
    // ========================================

    private function authorizeQuiz(Lesson $lesson, Quiz $quiz): void
    {
        if ($quiz->lesson_id !== $lesson->id) {
            abort(404, 'Ce quiz n\'appartient pas à cette leçon.');
        }
    }

    private function authorizeAttempt(QuizAttempt $attempt): void
    {
        if ($attempt->user_id !== auth()->id() && !auth()->user()->isAdmin()) {
            abort(403, 'Cette tentative ne vous appartient pas.');
        }
    }

    /**
     * Mettre à jour progression leçon
     */
    private function updateLessonProgress(QuizAttempt $attempt): void
    {
        if ($attempt->is_passed) {
            $user = auth()->user();
            $lesson = $attempt->quiz->lesson;

            $user->lessonCompletions()->updateOrCreate(
                [
                    'lesson_id' => $lesson->id,
                    'user_id' => $user->id,
                ],
                [
                    'is_completed' => true,
                    'completed_at' => now(),
                ]
            );

            // Débloquer leçon suivante
            $nextLesson = $lesson->course->lessons()
                ->where('order', '>', $lesson->order)
                ->ordered()
                ->first();

            if ($nextLesson) {
                $user->lessonCompletions()->firstOrCreate([
                    'lesson_id' => $nextLesson->id,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
