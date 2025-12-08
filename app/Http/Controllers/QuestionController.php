<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Validation\Rule;

class QuestionController extends Controller implements HasMiddleware
{
    /**
     * ✅ Middlewares Laravel 12
     */
    public static function middleware(): array
    {
        return [
            new Middleware('auth'),
            new Middleware('course.ownership'),
        ];
    }

    public function create(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $nextOrder = $quiz->questions()->max('order') + 1;

        return view('questions.create', compact('course', 'lesson', 'quiz', 'nextOrder'));
    }

    public function store(Request $request, Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        $validated = $this->validateQuestion($request);

        DB::beginTransaction();

        try {
            $question = $quiz->questions()->create([
                'question_text' => $validated['question_text'],
                'type' => $validated['type'],
                'points' => $validated['points'],
                'order' => $validated['order'] ?? ($quiz->questions()->max('order') + 1),
                'explanation' => $validated['explanation'] ?? null,
                'image_path' => $this->handleImageUpload($request),
            ]);

            $this->createAnswers($request, $question);

            DB::commit();

            return redirect()->route('instructor.quizzes.show', [$course, $lesson, $quiz])
                ->with('success', '✅ Question créée avec succès !');

        } catch (\Exception $e) {
            DB::rollBack();

            if (isset($validated['image'])) {
                Storage::disk('public')->delete($validated['image']);
            }

            return back()
                ->withInput()
                ->with('error', '❌ Erreur : ' . $e->getMessage());
        }
    }

    public function edit(Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeQuestion($quiz, $question);

        // ✅ Charger les réponses ordonnées
        $question->load(['answers' => function($query) {
            $query->orderBy('order');
        }]);

        return view('questions.edit', compact('course', 'lesson', 'quiz', 'question'));
    }

    public function update(Request $request, Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeQuestion($quiz, $question);

        $validated = $this->validateQuestion($request, $question->id);

        DB::beginTransaction();

        try {
            if ($request->boolean('remove_image') && $question->image_path) {
                Storage::disk('public')->delete($question->image_path);
                $question->image_path = null;
            }

            if ($request->hasFile('image')) {
                if ($question->image_path) {
                    Storage::disk('public')->delete($question->image_path);
                }
                $validated['image_path'] = $this->handleImageUpload($request);
            }

            $question->update([
                'question_text' => $validated['question_text'],
                'type' => $validated['type'],
                'points' => $validated['points'],
                'explanation' => $validated['explanation'] ?? null,
                'image_path' => $validated['image_path'] ?? $question->image_path,
            ]);

            $question->answers()->delete();
            $this->createAnswers($request, $question);

            DB::commit();

            return redirect()->route('instructor.quizzes.show', [$course, $lesson, $quiz])
                ->with('success', '✅ Question mise à jour avec succès !');

        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', '❌ Erreur : ' . $e->getMessage());
        }
    }

    public function destroy(Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeQuestion($quiz, $question);

        $orderToDelete = $question->order;

        if ($question->image_path) {
            Storage::disk('public')->delete($question->image_path);
        }

        $question->delete();

        $quiz->questions()
            ->where('order', '>', $orderToDelete)
            ->decrement('order');

        return redirect()->route('instructor.quizzes.show', [$course, $lesson, $quiz])
            ->with('success', '🗑️ Question supprimée avec succès.');
    }

    public function reorder(Request $request, Course $course, Lesson $lesson, Quiz $quiz)
    {
        $this->authorizeQuiz($lesson, $quiz);

        // ✅ Sécurité renforcée
        $validated = $request->validate([
            'questions' => 'required|array',
            'questions.*.id' => [
                'required',
                'integer',
                Rule::exists('questions', 'id')->where('quiz_id', $quiz->id), // ✅
            ],
            'questions.*.order' => 'required|integer|min:0',
        ]);

        DB::beginTransaction();

        try {
            foreach ($validated['questions'] as $questionData) {
                Question::where('id', $questionData['id'])
                    ->where('quiz_id', $quiz->id)
                    ->update(['order' => $questionData['order']]);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => '✅ Ordre des questions mis à jour !',
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => '❌ Erreur : ' . $e->getMessage(),
            ], 500);
        }
    }

    public function duplicate(Course $course, Lesson $lesson, Quiz $quiz, Question $question)
    {
        $this->authorizeQuiz($lesson, $quiz);
        $this->authorizeQuestion($quiz, $question);

        DB::beginTransaction();

        try {
            $newQuestion = $question->replicate();
            $newQuestion->question_text = $question->question_text . ' (Copie)';
            $newQuestion->order = $quiz->questions()->max('order') + 1;
            $newQuestion->save();

            foreach ($question->answers as $answer) {
                $newAnswer = $answer->replicate();
                $newAnswer->question_id = $newQuestion->id;
                $newAnswer->save();
            }

            DB::commit();

            return redirect()->route('instructor.questions.edit', [$course, $lesson, $quiz, $newQuestion])
                ->with('success', '✅ Question dupliquée avec succès !');

        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', '❌ Erreur : ' . $e->getMessage());
        }
    }

    // ========================================
    // MÉTHODES PRIVÉES
    // ========================================

    private function validateQuestion(Request $request, ?int $questionId = null)
    {
        $rules = [
            'question_text' => 'required|string|max:1000',
            'type' => 'required|in:single_choice,multiple_choice,true_false,short_answer',
            'points' => 'required|integer|min:1|max:100',
            'explanation' => 'nullable|string|max:1000',
            'order' => 'nullable|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        if ($request->type === 'single_choice' || $request->type === 'multiple_choice') {
            $rules['answers'] = 'required|array|min:2|max:6';
            $rules['answers.*.text'] = 'required|string|max:255';
            $rules['answers.*.is_correct'] = 'nullable|boolean';
        } elseif ($request->type === 'true_false') {
            $rules['correct_answer'] = 'required|in:true,false';
        } elseif ($request->type === 'short_answer') {
            $rules['correct_answer'] = 'required|string|max:500';
        }

        return $request->validate($rules, [
            'question_text.required' => 'Le texte de la question est obligatoire.',
            'type.required' => 'Le type de question est obligatoire.',
            'points.required' => 'Le nombre de points est obligatoire.',
            'answers.required' => 'Au moins 2 réponses sont nécessaires.',
            'answers.min' => 'Minimum 2 réponses.',
            'answers.max' => 'Maximum 6 réponses.',
        ]);
    }

    private function createAnswers(Request $request, Question $question): void
    {
        switch ($question->type) {
            case 'single_choice':
            case 'multiple_choice':
                $this->createChoiceAnswers($request, $question);
                break;

            case 'true_false':
                $this->createTrueFalseAnswers($request, $question);
                break;

            case 'short_answer':
                $this->createShortAnswer($request, $question);
                break;
        }
    }

    private function createChoiceAnswers(Request $request, Question $question): void
    {
        $answers = $request->input('answers', []);
        $hasCorrectAnswer = false;

        foreach ($answers as $index => $answerData) {
            $isCorrect = isset($answerData['is_correct']) && $answerData['is_correct'];

            if ($isCorrect) {
                $hasCorrectAnswer = true;
            }

            $question->answers()->create([
                'answer_text' => $answerData['text'],
                'is_correct' => $isCorrect,
                'order' => $index,
            ]);
        }

        if (!$hasCorrectAnswer) {
            throw new \Exception('Au moins une réponse doit être correcte.');
        }

        if ($question->type === 'single_choice') {
            $correctCount = collect($answers)->filter(fn($a) => isset($a['is_correct']) && $a['is_correct'])->count();
            if ($correctCount > 1) {
                throw new \Exception('Une seule réponse peut être correcte pour un QCM simple.');
            }
        }
    }

    private function createTrueFalseAnswers(Request $request, Question $question): void
    {
        $correctAnswer = $request->input('correct_answer');

        $question->answers()->createMany([
            [
                'answer_text' => 'Vrai',
                'is_correct' => ($correctAnswer === 'true'),
                'order' => 0,
            ],
            [
                'answer_text' => 'Faux',
                'is_correct' => ($correctAnswer === 'false'),
                'order' => 1,
            ],
        ]);
    }

    private function createShortAnswer(Request $request, Question $question): void
    {
        $question->answers()->create([
            'answer_text' => $request->input('correct_answer'),
            'is_correct' => true,
            'order' => 0,
        ]);
    }

    private function handleImageUpload(Request $request): ?string
    {
        if (!$request->hasFile('image')) {
            return null;
        }

        return $request->file('image')->store('questions/images', 'public');
    }

    private function authorizeQuiz(Lesson $lesson, Quiz $quiz): void
    {
        if ($quiz->lesson_id !== $lesson->id) {
            abort(404, 'Ce quiz n\'appartient pas à cette leçon.');
        }
    }

    private function authorizeQuestion(Quiz $quiz, Question $question): void
    {
        if ($question->quiz_id !== $quiz->id) {
            abort(404, 'Cette question n\'appartient pas à ce quiz.');
        }
    }
}
