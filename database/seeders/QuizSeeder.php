<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('📝 Création des quiz...');

        $courses = Course::published()->get();
        $quizCount = 0;

        foreach ($courses as $course) {
            // ============================================
            // 1. QUIZ DE COURS (évaluation finale)
            // ============================================

            Quiz::create([
                'course_id' => $course->id,
                'lesson_id' => null,
                'title' => "Évaluation finale : {$course->title}",
                'description' => "Quiz récapitulatif couvrant l'ensemble du cours.",
                'duration_minutes' => 60,
                'passing_score' => rand(60, 80),
                'max_attempts' => rand(2, 5),
                'randomize_questions' => (bool) rand(0, 1),
                'show_correct_answers' => true,
                'is_published' => true,
            ]);

            $quizCount++;

            // ============================================
            // 2. QUIZ PAR LEÇON (30% des leçons)
            // ============================================

            $lessons = $course->lessons()->published()->get();
            $lessonsWithQuiz = $lessons->random(min(ceil($lessons->count() * 0.3), $lessons->count()));

            foreach ($lessonsWithQuiz as $lesson) {
                Quiz::create([
                    'course_id' => null,
                    'lesson_id' => $lesson->id,
                    'title' => "Quiz : {$lesson->title}",
                    'description' => "Testez vos connaissances sur cette leçon.",
                    'duration_minutes' => 15,
                    'passing_score' => rand(60, 80),
                    'max_attempts' => null, // Illimité
                    'randomize_questions' => (bool) rand(0, 1),
                    'show_correct_answers' => true,
                    'is_published' => true,
                ]);

                $quizCount++;
            }
        }

        $this->command->info("✅ {$quizCount} quiz créés.");
    }
}
