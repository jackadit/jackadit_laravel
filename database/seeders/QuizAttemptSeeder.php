<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Database\Seeder;

class QuizAttemptSeeder extends Seeder
{
    public function run(): void
    {
        $enrollments = Enrollment::all();

        foreach ($enrollments as $enrollment) {
            // Récupérer les quiz du cours
            $quizzes = Quiz::whereHas('lesson', function ($query) use ($enrollment) {
                $query->where('course_id', $enrollment->course_id);
            })->get();

            foreach ($quizzes as $quiz) {
                // 70% de chance d'avoir tenté le quiz
                if (rand(0, 100) < 70) {
                    $attemptCount = rand(1, min(3, $quiz->max_attempts ?? 3));

                    for ($i = 1; $i <= $attemptCount; $i++) {
                        $score = rand(40, 100);
                        $isPassed = $score >= $quiz->passing_score;

                        QuizAttempt::create([
                            'quiz_id' => $quiz->id,
                            'user_id' => $enrollment->user_id,
                            'attempt_number' => $i,
                            'started_at' => now()->subDays(rand(1, 20)),
                            'completed_at' => now()->subDays(rand(1, 20))->addMinutes(rand(5, 30)),
                            'score' => $score,
                            'is_passed' => $isPassed,
                            'status' => 'completed',
                            'time_spent' => rand(300, 1800), // 5 à 30 minutes
                            'ip_address' => '192.168.1.' . rand(1, 255),
                        ]);
                    }
                }
            }
        }
    }
}
