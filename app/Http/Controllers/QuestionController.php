<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Afficher les questions d'un quiz
     */
    public function index(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $questions = $quiz->questions()->orderBy('order')->get();

        return view('questions.index', compact('course', 'lesson', 'quiz', 'questions'));
    }

    /**
     * Formulaire de création d'une question
     */
    public function create(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $nextOrder = $quiz->questions()->max('order') + 1;

        return view('questions.create', compact('course', 'lesson', 'quiz', 'nextOrder'));
    }

    /**
     * Enregistrer une nouvelle question
     */
    public function store(Request $request, Course $course, Lesson $lesson, Quiz $quiz)
    {
        $validated = $request->validate([
            'question_text' => 'required|string',
            'question_type' => 'required|in:multiple_choice,true_false,short_answer',
            'points' => 'required|integer|min:1',
            'explanation' => 'nullable|string',
            'answers' => 'required|array|min:2',
            'answers.*.text' => 'required|string',
            'answers.*.is_correct' => 'nullable|boolean',
        ], [
            'question_text.required' => 'Le texte de la question est obligatoire.',
            'question_type.required' => 'Le type de question est obligatoire.',
            'points.required' => 'Le nombre de points est obligatoire.',
            'answers.required' => 'Au moins deux réponses sont requises.',
            'answers.min' => 'Il faut au minimum 2 réponses.',
            'answers.*.text.required' => 'Le texte de chaque réponse est obligatoire.',
        ]);

        // ✅ Initialisation AVANT la boucle
        $correctAnswers = [];

        // Préparer les bonnes réponses
        foreach ($validated['answers'] as $index => $answerData) {
            if (isset($answerData['is_correct']) && $answerData['is_correct']) {
                $correctAnswers[] = $index;
            }
        }

        // Créer la question
        $question = $quiz->questions()->create([
            'question_text' => $validated['question_text'],
            'question_type' => $validated['question_type'],
            'points' => $validated['points'],
            'explanation' => $validated['explanation'],
            'correct_answers' => json_encode($correctAnswers), // ✅ Peut être []
        ]);

        // Créer les réponses dans la table answers
        foreach ($validated['answers'] as $answerData) {
            $question->answers()->create([
                'answer_text' => $answerData['text'],
                'is_correct' => isset($answerData['is_correct']) && $answerData['is_correct'] ? true : false,
            ]);
        }

        return redirect()
            ->route('courses.lessons.quizzes.show', [$course, $lesson, $quiz])
            ->with('success', 'Question créée avec succès.');
    }



    /**
     * Afficher une question
     */
    public function show(Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        return view('questions.show', compact('course', 'lesson', 'quiz', 'question'));
    }

    /**
     * Afficher le formulaire d'édition d'une question
     */
    public function edit(Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        // Vérifier que la question appartient bien au quiz
        if ($question->quiz_id !== $quiz->id) {
            abort(404, 'Cette question n\'appartient pas à ce quiz');
        }

        // Charger les réponses existantes
        $question->load('answers');

        return view('questions.edit', compact('course', 'lesson', 'quiz', 'question'));
    }

    /**
     * Mettre à jour une question existante
     */
    public function update(Request $request, Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        // Vérifier que la question appartient bien au quiz
        if ($question->quiz_id !== $quiz->id) {
            abort(404, 'Cette question n\'appartient pas à ce quiz');
        }

        // Validation
        $validated = $request->validate([
            'question_text' => 'required|string|max:1000',
            'question_type' => 'required|in:multiple_choice,true_false,short_answer',
            'points' => 'required|integer|min:1|max:100',
            'explanation' => 'nullable|string|max:1000',

            // Réponses
            'answers' => 'required|array|min:2',
            'answers.*.answer_text' => 'required|string|max:500',
            'answers.*.is_correct' => 'nullable|boolean',
        ]);

        // Mise à jour de la question
        $question->update([
            'question_text' => $validated['question_text'],
            'question_type' => $validated['question_type'],
            'points' => $validated['points'],
            'explanation' => $validated['explanation'],
        ]);

        // Supprimer les anciennes réponses
        $question->answers()->delete();

        // Recréer les nouvelles réponses
        foreach ($validated['answers'] as $answerData) {
            $question->answers()->create([
                'answer_text' => $answerData['answer_text'],
                'is_correct' => isset($answerData['is_correct']) && $answerData['is_correct'] == '1',
            ]);
        }

        return redirect()
            ->route('quizzes.show', [$course, $lesson, $quiz])
            ->with('success', 'Question modifiée avec succès !');
    }


    /**
     * Supprimer une question
     */
    public function destroy(Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        $question->delete();

        return redirect()
            ->route('courses.lessons.quizzes.questions.index', [$course, $lesson, $quiz])
            ->with('success', '🗑️ Question supprimée avec succès.');
    }
}
