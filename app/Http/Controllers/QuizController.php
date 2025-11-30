<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Afficher la liste des quiz d'une leçon
     */
    public function index(Course $course, Lesson $lesson)
    {
        $quizzes = $lesson->quizzes()
            ->withCount('questions')  // Ajoute le nombre de questions
            ->orderBy('created_at', 'desc')
            ->get();

        return view('quizzes.index', compact('course', 'lesson', 'quizzes'));
    }

    /**
     * Formulaire de création d'un quiz
     */
    public function create(Course $course, Lesson $lesson)
    {
        // Vérifier si un quiz existe déjà
        if ($lesson->hasQuiz()) {
            return redirect()
                ->route('courses.lessons.quizzes.edit', [$course, $lesson, $lesson->quiz])
                ->with('info', 'Cette leçon a déjà un quiz. Vous pouvez le modifier.');
        }

        return view('quizzes.create', compact('course', 'lesson'));
    }

    /**
     * Enregistrer un nouveau quiz
     */
    public function store(Request $request, Course $course, Lesson $lesson)
    {
        $validated = $request->validate([
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
        ]);

        // Conversion explicite des boolean (si nécessaire)
        $validated['shuffle_questions'] = $request->boolean('shuffle_questions');
        $validated['show_correct_answers'] = $request->boolean('show_correct_answers');
        $validated['is_active'] = $request->boolean('is_active');

        // Création via la relation
        $quiz = $lesson->quizzes()->create($validated);

        // Redirection (garde TON choix)
        return redirect()
            ->route('courses.lessons.quizzes.questions.create', [$course, $lesson, $quiz])
            ->with('success', '✅ Quiz créé ! Ajoutez maintenant des questions.');
    }



    /**
     * Afficher un quiz
     */
    public function show(Course $course, Lesson $lesson, Quiz $quiz)
    {
        // Vérifier que le quiz appartient bien à la leçon
        if ($quiz->lesson_id !== $lesson->id) {
            abort(404, 'Ce quiz n\'appartient pas à cette leçon');
        }

        // Charger les questions avec leurs réponses
        $quiz->load(['questions.answers']);


        return view('quizzes.show', compact('course', 'lesson', 'quiz'));
    }

    /**
     * Formulaire d'édition d'un quiz
     */
    public function edit(Course $course, Lesson $lesson, Quiz $quiz)
    {
        return view('quizzes.edit', compact('course', 'lesson', 'quiz'));
    }

    /**
     * Mettre à jour un quiz
     */
    public function update(Request $request, Course $course, Lesson $lesson, Quiz $quiz)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'passing_score' => 'required|integer|min:0|max:100',
            'time_limit' => 'nullable|integer|min:1',
            'max_attempts' => 'required|integer|min:1|max:10',
            'shuffle_questions' => 'boolean',
            'show_correct_answers' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $validated['shuffle_questions'] = $request->has('shuffle_questions');
        $validated['show_correct_answers'] = $request->has('show_correct_answers');
        $validated['is_active'] = $request->has('is_active');

        $quiz->update($validated);

        return redirect()
            ->route('courses.lessons.quizzes.show', [$course, $lesson, $quiz])
            ->with('success', '✅ Quiz mis à jour avec succès !');
    }

    /**
     * Supprimer un quiz
     */
    public function destroy(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $quiz->delete();

        return redirect()
            ->route('courses.lessons.show', [$course, $lesson])
            ->with('success', '🗑️ Quiz supprimé avec succès.');
    }
}
