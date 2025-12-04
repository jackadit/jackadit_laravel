<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizAttemptController extends Controller
{
    /**
     * Middlewares de sécurité
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('course.access');
    }

    /**
     * Liste des tentatives (instructeur)
     */
    public function index(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorize('view', $course); // Policy instructeur

        $this->authorizeQuiz($lesson, $quiz);

        $attempts = $quiz->attempts()
            ->with('user:id,name,email')
            ->withCount('answers')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        // Statistiques globales
        $stats = [
            'total_attempts' => $attempts->total(),
            'avg_score' => $quiz->attempts()->avg('score'),
            'pass_rate' => $quiz->attempts()->where('is_passed', true)->count() / max($attempts->total(), 1) * 100,
            'avg_time' => $quiz->attempts()->avg('time_spent'),
        ];

        return view('quiz-attempts.index', compact('course', 'lesson', 'quiz', 'attempts', 'stats'));
    }

    /**
     * Démarrer un quiz (étudiant)
     */
    public function start(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $user = Auth::user();

        // ⭐ Vérifications multiples
        if (!$quiz->is_active) {
            return back()->with('error', '❌ Ce quiz n\'est pas disponible.');
        }

        if (!$quiz->canUserAttempt($user->id)) {
            return back()->with('error', '❌ Vous avez atteint le nombre maximum de tentatives (' . $quiz->max_attempts . ').');
        }

        // ⭐ Vérifier si tentative en cours
        $ongoingAttempt = $quiz->attempts()
            ->where('user_id', $user->id)
            ->whereNull('completed_at')
            ->first();

        if ($ongoingAttempt) {
            return redirect()
                ->route('quiz-attempts.take', [$course, $lesson, $quiz, $ongoingAttempt])
                ->with('info', '⚠️ Vous avez une tentative en cours.');
        }

        // ⭐ Créer nouvelle tentative
        $attempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'user_id' => $user->id,
            'answers' => [],
            'total_points' => $quiz->totalPoints(),
            'started_at' => now(),
        ]);

        return redirect()
            ->route('quiz-attempts.take', [$course, $lesson, $quiz, $attempt])
            ->with('success', '✅ Quiz démarré ! Bonne chance 🍀');
    }

    /**
     * Afficher le quiz (étudiant)
     */
    public function take(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeAttempt($attempt);

        // ⭐ Rediriger si déjà complété
        if ($attempt->completed_at) {
            return redirect()
                ->route('quiz-attempts.result', [$course, $lesson, $quiz, $attempt])
                ->with('info', 'Quiz déjà complété.');
        }

        // ⭐ Vérifier timeout (si time_limit défini)
        if ($quiz->time_limit && $attempt->isExpired()) {
            $attempt->autoSubmit(); // Méthode Model

            return redirect()
                ->route('quiz-attempts.result', [$course, $lesson, $quiz, $attempt])
                ->with('warning', '⏰ Temps écoulé ! Le quiz a été automatiquement soumis.');
        }

        // ⭐ Charger questions avec réponses
        $questions = $quiz->shuffle_questions
            ? $quiz->questions()->with('answers')->inRandomOrder()->get()
            : $quiz->questions()->with('answers')->orderBy('order')->get();

        // ⭐ Temps restant (si limité)
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
     * ⭐ NOUVEAU : Sauvegarder brouillon (AJAX)
     */
    public function saveDraft(Request $request, Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeAttempt($attempt);

        // Vérifier si non complété
        if ($attempt->completed_at) {
            return response()->json(['error' => 'Quiz déjà complété'], 400);
        }

        // Sauvegarder les réponses
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

        // ⭐ Validation : quiz non complété
        if ($attempt->completed_at) {
            return back()->with('error', '❌ Ce quiz a déjà été soumis.');
        }

        $validated = $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'nullable', // Permet réponses vides
        ]);

        DB::beginTransaction();

        try {
            // 1️⃣ Enregistrer réponses
            $attempt->update([
                'answers' => $validated['answers'],
                'completed_at' => now(),
            ]);

            // 2️⃣ Calculer temps passé
            $timeSpent = now()->diffInSeconds($attempt->started_at);
            $attempt->update(['time_spent' => $timeSpent]);

            // 3️⃣ Calculer score (méthode Model)
            $attempt->calculateScore();

            // 4️⃣ ⭐ NOUVEAU : Mettre à jour progression leçon
            $this->updateLessonProgress($attempt);

            // 5️⃣ ⭐ NOUVEAU : Débloquer leçon suivante si réussi
            if ($attempt->is_passed) {
                $this->unlockNextLesson($course, $lesson);
            }

            DB::commit();

            return redirect()
                ->route('quiz-attempts.result', [$course, $lesson, $quiz, $attempt])
                ->with('success', $attempt->is_passed
                    ? '🎉 Félicitations ! Vous avez réussi le quiz !'
                    : '📝 Quiz complété. Consultez vos résultats.');

        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', '❌ Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le résultat
     */
    public function result(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeAttempt($attempt);

        // ⭐ Rediriger si non complété
        if (!$attempt->completed_at) {
            return redirect()
                ->route('quiz-attempts.take', [$course, $lesson, $quiz, $attempt])
                ->with('warning', '⚠️ Vous devez d\'abord terminer le quiz.');
        }

        // ⭐ Charger questions avec réponses et explications
        $questions = $quiz->questions()
            ->with('answers')
            ->orderBy('order')
            ->get();

        // ⭐ NOUVEAU : Statistiques comparatives
        $userStats = [
            'attempts_count' => $quiz->userAttempts(Auth::id())->count(),
            'best_score' => $quiz->userAttempts(Auth::id())->max('score'),
            'avg_score' => $quiz->userAttempts(Auth::id())->avg('score'),
        ];

        $globalStats = [
            'avg_score' => $quiz->attempts()->avg('score'),
            'pass_rate' => $quiz->attempts()->where('is_passed', true)->count() / max($quiz->attempts()->count(), 1) * 100,
        ];

        return view('quiz-attempts.result', compact(
            'course',
            'lesson',
            'quiz',
            'attempt',
            'questions',
            'userStats',
            'globalStats'
        ));
    }

    /**
     * Historique des tentatives (étudiant)
     */
    public function history(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $attempts = $quiz->userAttempts(Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // ⭐ Statistiques utilisateur
        $stats = [
            'total_attempts' => $attempts->total(),
            'best_score' => $quiz->userAttempts(Auth::id())->max('score'),
            'avg_score' => $quiz->userAttempts(Auth::id())->avg('score'),
            'passed_attempts' => $quiz->userAttempts(Auth::id())->where('is_passed', true)->count(),
        ];

        return view('quiz-attempts.history', compact('course', 'lesson', 'quiz', 'attempts', 'stats'));
    }

    /**
     * ⭐ NOUVEAU : Télécharger certificat (si réussi)
     */
    public function certificate(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeAttempt($attempt);

        if (!$attempt->is_passed) {
            return back()->with('error', '❌ Vous devez réussir le quiz pour obtenir le certificat.');
        }

        // Générer PDF (utilise dompdf ou autre)
        $pdf = \PDF::loadView('certificates.quiz', compact('course', 'lesson', 'quiz', 'attempt'));

        return $pdf->download("certificat-quiz-{$quiz->id}.pdf");
    }

    /**
     * ⭐ NOUVEAU : Révision (revoir questions sans soumettre)
     */
    public function review(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        $this->authorizeAttempt($attempt);

        if (!$attempt->completed_at) {
            return back()->with('error', '❌ Vous devez d\'abord terminer le quiz.');
        }

        $questions = $quiz->questions()
            ->with('answers')
            ->orderBy('order')
            ->get();

        return view('quiz-attempts.review', compact('course', 'lesson', 'quiz', 'attempt', 'questions'));
    }

    // ========================================
    // MÉTHODES PRIVÉES
    // ========================================

    /**
     * Vérifier que le quiz appartient à la leçon
     */
    private function authorizeQuiz(Lesson $lesson, Quiz $quiz): void
    {
        if ($quiz->lesson_id !== $lesson->id) {
            abort(404, 'Ce quiz n\'appartient pas à cette leçon.');
        }
    }

    /**
     * Vérifier que l'utilisateur est propriétaire de la tentative
     */
    private function authorizeAttempt(QuizAttempt $attempt): void
    {
        if ($attempt->user_id !== Auth::id()) {
            abort(403, 'Vous n\'êtes pas autorisé à accéder à cette tentative.');
        }
    }

    /**
     * ⭐ Mettre à jour progression leçon
     */
    private function updateLessonProgress(QuizAttempt $attempt): void
    {
        $lesson = $attempt->quiz->lesson;
        $user = Auth::user();

        // Créer/mettre à jour progression
        $user->lessonProgress()->updateOrCreate(
            ['lesson_id' => $lesson->id],
            [
                'is_completed' => $attempt->is_passed,
                'completed_at' => $attempt->is_passed ? now() : null,
            ]
        );
    }

    /**
     * ⭐ Débloquer leçon suivante si quiz réussi
     */
    private function unlockNextLesson(Course $course, Lesson $lesson): void
    {
        $nextLesson = $course->lessons()
            ->where('order', '>', $lesson->order)
            ->orderBy('order')
            ->first();

        if ($nextLesson) {
            Auth::user()->lessonProgress()->firstOrCreate([
                'lesson_id' => $nextLesson->id,
            ]);
        }
    }
}
