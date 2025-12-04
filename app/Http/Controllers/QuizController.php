<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Middlewares de sécurité
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('course.ownership')->except(['show']);
        $this->middleware('course.access')->only(['show']);
    }

    /**
     * Liste des quiz d'une leçon
     */
    public function index(Course $course, Lesson $lesson)
    {
        $this->authorizeLesson($course, $lesson);

        $quizzes = $lesson->quizzes()
            ->withCount('questions')
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

        // ⭐ FIX : Vérification correcte du quiz existant
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

        // ⭐ Mettre à jour le content_type de la leçon
        $lesson->update(['content_type' => 'quiz']);

        return redirect()
            ->route('questions.create', [$course, $lesson, $quiz])
            ->with('success', '✅ Quiz créé ! Ajoutez maintenant des questions.');
    }

    /**
     * Afficher un quiz (avec stats si étudiant)
     */
    public function show(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeLesson($course, $lesson);
        $this->authorizeQuiz($lesson, $quiz);

        // Charger questions + réponses
        $quiz->load(['questions.answers' => function ($query) {
            $query->orderBy('order');
        }]);

        // ⭐ NOUVEAU : Stats utilisateur (si étudiant)
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
                    ->where('score', '>=', $quiz->passing_score)
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

        // ⭐ FIX : Utiliser boolean() au lieu de has()
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

        // ⭐ NOUVEAU : Réinitialiser content_type de la leçon
        if ($lesson->quizzes()->count() === 1) {
            $lesson->update(['content_type' => 'text']);
        }

        $quiz->delete();

        return redirect()
            ->route('lessons.show', [$course, $lesson])
            ->with('success', '🗑️ Quiz supprimé avec succès.');
    }

    /**
     * ⭐ NOUVEAU : Dupliquer un quiz
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

        // Dupliquer les questions + réponses
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
     * ⭐ NOUVEAU : Activer/Désactiver rapidement
     */
    public function toggleActive(Course $course, Lesson $lesson, Quiz $quiz)
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

    /**
     * Validation centralisée
     */
    private function validateQuiz(Request $request)
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

    /**
     * Vérifier que la leçon appartient au cours
     */
    private function authorizeLesson(Course $course, Lesson $lesson): void
    {
        if ($lesson->course_id !== $course->id) {
            abort(404, 'Cette leçon n\'appartient pas à ce cours.');
        }
    }

    /**
     * Vérifier que le quiz appartient à la leçon
     */
    private function authorizeQuiz(Lesson $lesson, Quiz $quiz): void
    {
        if ($quiz->lesson_id !== $lesson->id) {
            abort(404, 'Ce quiz n\'appartient pas à cette leçon.');
        }
    }
}
