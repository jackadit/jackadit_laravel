<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizAttemptController extends Controller
{
    /**
     * Démarrer un quiz (étudiant)
     */
    public function start(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur peut tenter le quiz
        if (!$quiz->canUserAttempt($user->id)) {
            return redirect()
                ->route('courses.lessons.show', [$course, $lesson])
                ->with('error', '❌ Vous avez atteint le nombre maximum de tentatives.');
        }

        // Créer une nouvelle tentative
        $attempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'user_id' => $user->id,
            'answers' => [],
            'total_points' => $quiz->totalPoints(),
            'started_at' => now(),
        ]);

        return redirect()->route('quiz-attempts.take', [$course, $lesson, $quiz, $attempt]);
    }

    /**
     * Afficher le quiz (étudiant)
     */
    public function take(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        // Vérifier que l'utilisateur est le propriétaire de la tentative
        if ($attempt->user_id !== Auth::id()) {
            abort(403);
        }

        // Si déjà complété, rediriger vers les résultats
        if ($attempt->completed_at) {
            return redirect()->route('quiz-attempts.result', [$course, $lesson, $quiz, $attempt]);
        }

        $questions = $quiz->shuffle_questions
            ? $quiz->questions()->inRandomOrder()->get()
            : $quiz->questions()->orderBy('order')->get();

        return view('quiz-attempts.take', compact('course', 'lesson', 'quiz', 'attempt', 'questions'));
    }

    /**
     * Soumettre le quiz
     */
    public function submit(Request $request, Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        // Vérifier que l'utilisateur est le propriétaire
        if ($attempt->user_id !== Auth::id()) {
            abort(403);
        }

        // Enregistrer les réponses
        $answers = $request->input('answers', []);
        $attempt->update(['answers' => $answers]);

        // Calculer le temps passé
        $timeSpent = now()->diffInSeconds($attempt->started_at);
        $attempt->update(['time_spent' => $timeSpent]);

        // Calculer le score
        $attempt->calculateScore();

        return redirect()->route('quiz-attempts.result', [$course, $lesson, $quiz, $attempt]);
    }

    /**
     * Afficher le résultat
     */
    public function result(Course $course, Lesson $lesson, Quiz $quiz, QuizAttempt $attempt)
    {
        // Vérifier que l'utilisateur est le propriétaire
        if ($attempt->user_id !== Auth::id()) {
            abort(403);
        }

        $questions = $quiz->questions()->orderBy('order')->get();

        return view('quiz-attempts.result', compact('course', 'lesson', 'quiz', 'attempt', 'questions'));
    }

    /**
     * Historique des tentatives (étudiant)
     */
    public function history(Course $course, Lesson $lesson, Quiz $quiz)
    {
        $attempts = $quiz->userAttempts(Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('quiz-attempts.history', compact('course', 'lesson', 'quiz', 'attempts'));
    }
}
