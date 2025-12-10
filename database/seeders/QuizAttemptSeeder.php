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
                    $attemptCount = rand(1, min(0, $quiz->max_attempts ?? 3));

                    for ($i = 1; $i <= $attemptCount; $i++) {
                        $score = rand(40, 100);
                        $isPassed = $score >= $quiz->passing_score;

                        QuizAttempt::create([
                            'user_id' => $enrollment->user_id,
                            'quiz_id' => $quiz->id,
                            'enrollment_id' => $enrollment->id,
                            'attempt_number' => $i,
                            'score' => $score,
                            'is_passed' => $isPassed,
                            'started_at' => now()->subDays(rand(1, 20)),
                            'completed_at' => now()->subDays(rand(1, 20))->addMinutes(rand(1, 2)),
                            'time_spent' => rand(60, 600), // 1 à 100 minutes
                            'ip_address' => '192.168.1.' . rand(1, 255),
                        ]);
                    }
                }
            }
        }
    }
}
