<?php

namespace App\Listeners;

use App\Events\QuizCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class UpdateQuizStatistics implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     */
    public function handle(QuizCompleted $event): void
    {
        $quiz = $event->quiz;

        // Mettre à jour statistiques du quiz
        $quiz->increment('attempts_count');

        if ($event->passed) {
            $quiz->increment('passed_count');
        }

        // Calculer score moyen
        $averageScore = $quiz->attempts()
            ->avg('score');

        $quiz->update([
            'average_score' => round($averageScore ?? 0, 2),
        ]);

        // Log
        Log::info("Quiz complété", [
            'user_id' => $event->user->id,
            'quiz_id' => $quiz->id,
            'score' => $event->score,
            'passed' => $event->passed,
        ]);
    }
}
