<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\QuizAttempt;
use App\Models\Question;
use App\Models\Answer;
use App\Models\UserQuizAnswer;
use Illuminate\Database\Seeder;

class UserQuizAnswerSeeder extends Seeder
{
    /**
     * Seed the user_quiz_answers table.
     */
    public function run(): void
    {
        $attempts = QuizAttempt::with('quiz.questions.answers')->get();

        if ($attempts->isEmpty()) {
            $this->command->warn('⚠️  Aucune tentative de quiz trouvée. Exécute d\'abord QuizAttemptSeeder.');
            return;
        }

        $this->command->info("🎯 Génération des réponses pour {$attempts->count()} tentatives...");

        foreach ($attempts as $attempt) {
            $this->createAnswersForAttempt($attempt);
        }

        $totalAnswers = UserQuizAnswer::count();
        $correctAnswers = UserQuizAnswer::where('is_correct', true)->count();
        $successRate = round(($correctAnswers / $totalAnswers) * 100, 2);

        $this->command->info("✅ {$totalAnswers} réponses créées !");
        $this->command->info("📊 Taux de réussite global : {$successRate}%");
    }

    /**
     * Créer les réponses pour une tentative
     */
    private function createAnswersForAttempt(QuizAttempt $attempt): void
    {
        $questions = $attempt->quiz->questions;
        $cumulativeTime = 0;

        foreach ($questions as $question) {
            $cumulativeTime = $this->createAnswerForQuestion($attempt, $question, $cumulativeTime);
        }
    }

    /**
     * Créer une réponse pour une question
     */
    private function createAnswerForQuestion(QuizAttempt $attempt, Question $question, int $cumulativeTime): int
    {
        // Vérifier si une réponse existe déjà
        if (UserQuizAnswer::where('quiz_attempt_id', $attempt->id)
            ->where('question_id', $question->id)
            ->exists()) {
            return $cumulativeTime;
        }

        // Simuler un temps de réponse (10-120 secondes)
        $timeTaken = rand(10, 120);
        $cumulativeTime += $timeTaken;

        // Déterminer le type de question
        $questionType = $question->type ?? 'multiple_choice';

        if ($questionType === 'open_ended') {
            // Question ouverte
            $this->createOpenEndedAnswer($attempt, $question, $timeTaken, $cumulativeTime);
        } else {
            // QCM / Vrai-Faux
            $this->createMultipleChoiceAnswer($attempt, $question, $timeTaken, $cumulativeTime);
        }

        return $cumulativeTime;
    }

    /**
     * Créer une réponse QCM
     */
    private function createMultipleChoiceAnswer(QuizAttempt $attempt, Question $question, int $timeTaken, int $cumulativeTime): void
    {
        $selectedAnswer = $question->answers->random();

        UserQuizAnswer::create([
            'user_id' => $attempt->user_id,
            'quiz_attempt_id' => $attempt->id,
            'question_id' => $question->id,
            'answer_id' => $selectedAnswer->id,
            'user_answer_text' => null,
            'is_correct' => $selectedAnswer->is_correct,
            'points_earned' => $selectedAnswer->is_correct ? $question->points : 0,
            'time_taken' => $timeTaken,
            'answered_at' => $attempt->started_at->addSeconds($cumulativeTime),
        ]);
    }

    /**
     * Créer une réponse pour question ouverte
     */
    private function createOpenEndedAnswer(QuizAttempt $attempt, Question $question, int $timeTaken, int $cumulativeTime): void
    {
        $sampleAnswers = [
            "C'est une réponse détaillée à la question posée.",
            "Voici mon analyse de la situation présentée.",
            "Je pense que la réponse est...",
            "Selon mes connaissances, je dirais que...",
            "Mon opinion sur ce sujet est la suivante...",
        ];

        // 70% de chance d'être correct
        $isCorrect = rand(1, 100) <= 70;

        UserQuizAnswer::create([
            'user_id' => $attempt->user_id,
            'quiz_attempt_id' => $attempt->id,
            'question_id' => $question->id,
            'answer_id' => null, // Pas de choix multiple
            'user_answer_text' => $sampleAnswers[array_rand($sampleAnswers)],
            'is_correct' => $isCorrect,
            'points_earned' => $isCorrect ? $question->points : rand(0, $question->points / 2),
            'time_taken' => $timeTaken,
            'answered_at' => $attempt->started_at->addSeconds($cumulativeTime),
        ]);
    }
}
