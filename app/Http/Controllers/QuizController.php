<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class QuizController extends Controller implements HasMiddleware
{
    /**
     * ✅ Définition des middlewares Laravel 11+
     */
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('course.ownership', except: ['show']),
            new Middleware('course.access', only: ['show']),
        ];
    }

    /**
     * Liste des quiz d'une leçon
     */
    public function index(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $quizzes = $lesson->quizzes()
            ->withCount('questions')
            ->with('attempts') // Si utilisé dans la vue
            ->orderBy('created_at', 'desc')
            ->get();

        return view('quizzes.index', compact('course', 'lesson', 'quizzes'));
    }

    /**
     * Formulaire de création
     */
    public function create(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        // Vérifier si quiz existe déjà
        if ($lesson->quizzes()->exists()) {
            $existingQuiz = $lesson->quizzes()->first();
            return redirect()
                ->route('quizzes.edit', [$course, $lesson, $existingQuiz])
                ->with('info', '⚠️ Cette leçon a déjà un quiz. Vous pouvez le modifier.');
        }

        return view('quizzes.create', compact('course', 'lesson'));
    }

    /**
     * Enregistrer un nouveau quiz
     */
    public function store(Request $request, Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $validated = $this->validateQuiz($request);

        // Booléens explicites
        $validated['shuffle_questions'] = $request->boolean('shuffle_questions');
        $validated['show_correct_answers'] = $request->boolean('show_correct_answers');
        $validated['is_active'] = $request->boolean('is_active');

        // Création via relation
        $quiz = $lesson->quizzes()->create($validated);

        // Mettre à jour content_type
        $lesson->update(['content_type' => 'quiz']);

        return redirect()
            ->route('questions.create', [$course, $lesson, $quiz])
            ->with('success', '✅ Quiz créé ! Ajoutez maintenant des questions.');
    }

    /**
     * Afficher un quiz
     */
    public function show(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeLesson($course, $lesson);
        $this->authorizeQuiz($lesson, $quiz);

        // ✅ Instructeur OU étudiant inscrit
        $user = auth()->user();

        if ($course->instructor_id !== $user->id && !$user->isEnrolledIn($course)) {
            abort(403, 'Accès non autorisé');
        }

        // Charger questions + réponses
        $quiz->load(['questions.answers' => function ($query) {
            $query->orderBy('order');
        }]);

        // Stats utilisateur (si étudiant)
        $userStats = null;
        if (auth()->check()) {
            $userStats = [
                'attempts_count' => auth()->user()
                    ->quizAttempts()
                    ->where('quiz_id', $quiz->id)
                    ->count(),
                'best_score' => auth()->user()
                    ->quizAttempts()
                    ->where('quiz_id', $quiz->id)
                    ->max('score'),
                'passed' => auth()->user()
                    ->quizAttempts()
                    ->where('quiz_id', $quiz->id)
                    ->where('is_passed', true)
                    ->exists(),
            ];
        }

        return view('quizzes.show', compact('course', 'lesson', 'quiz', 'userStats'));
    }

    /**
     * Formulaire d'édition
     */
    public function edit(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeLesson($course, $lesson);
        $this->authorizeQuiz($lesson, $quiz);

        return view('quizzes.edit', compact('course', 'lesson', 'quiz'));
    }

    /**
     * Mettre à jour
     */
    public function update(Request $request, Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeLesson($course, $lesson);
        $this->authorizeQuiz($lesson, $quiz);

        $validated = $this->validateQuiz($request);

        $validated['shuffle_questions'] = $request->boolean('shuffle_questions');
        $validated['show_correct_answers'] = $request->boolean('show_correct_answers');
        $validated['is_active'] = $request->boolean('is_active');

        $quiz->update($validated);

        return redirect()
            ->route('quizzes.show', [$course, $lesson, $quiz])
            ->with('success', '✅ Quiz mis à jour avec succès !');
    }

    /**
     * Supprimer
     */
    public function destroy(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeLesson($course, $lesson);
        $this->authorizeQuiz($lesson, $quiz);

        // Réinitialiser content_type si dernier quiz
        if ($lesson->quizzes()->count() === 1) {
            $lesson->update(['content_type' => 'text']);
        }

        $quiz->delete();

        return redirect()
            ->route('lessons.show', [$course, $lesson])
            ->with('success', '🗑️ Quiz supprimé avec succès.');
    }

    /**
     * Dupliquer un quiz
     */
    public function duplicate(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeLesson($course, $lesson);
        $this->authorizeQuiz($lesson, $quiz);

        // Dupliquer le quiz
        $newQuiz = $quiz->replicate();
        $newQuiz->title = $quiz->title . ' (Copie)';
        $newQuiz->is_active = false;
        $newQuiz->save();

        // Dupliquer questions + réponses
        foreach ($quiz->questions as $question) {
            $newQuestion = $question->replicate();
            $newQuestion->quiz_id = $newQuiz->id;
            $newQuestion->save();

            foreach ($question->answers as $answer) {
                $newAnswer = $answer->replicate();
                $newAnswer->question_id = $newQuestion->id;
                $newAnswer->save();
            }
        }

        return redirect()
            ->route('quizzes.edit', [$course, $lesson, $newQuiz])
            ->with('success', '✅ Quiz dupliqué avec ' . $newQuiz->questions()->count() . ' questions !');
    }

    /**
     * Activer/Désactiver
     */
    public function toggleStatus(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeLesson($course, $lesson);
        $this->authorizeQuiz($lesson, $quiz);

        $quiz->update(['is_active' => !$quiz->is_active]);

        $status = $quiz->is_active ? 'activé ✅' : 'désactivé ⏸️';

        return back()->with('success', "Quiz $status");
    }

    // ========================================
    // MÉTHODES PRIVÉES
    // ========================================

    private function validateQuiz(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'passing_score' => 'required|integer|min:0|max:100',
            'time_limit' => 'nullable|integer|min:1',
            'max_attempts' => 'required|integer|min:1|max:10',
            'shuffle_questions' => 'boolean',
            'show_correct_answers' => 'boolean',
            'is_active' => 'boolean',
        ], [
            'title.required' => 'Le titre du quiz est obligatoire.',
            'passing_score.required' => 'Le score de passage est obligatoire.',
            'passing_score.max' => 'Le score ne peut pas dépasser 100%.',
            'max_attempts.max' => 'Maximum 10 tentatives autorisées.',
        ]);
    }

    private function authorizeLesson(Course $course, Lesson $lesson): void
    {
        if ($lesson->course_id !== $course->id) {
            abort(404, 'Cette leçon n\'appartient pas à ce cours.');
        }
    }

    private function authorizeQuiz(Lesson $lesson, Quiz $quiz): void
    {
        if ($quiz->lesson_id !== $lesson->id) {
            abort(404, 'Ce quiz n\'appartient pas à cette leçon.');
        }
    }
}
