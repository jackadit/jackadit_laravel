<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        // Récupérer toutes les leçons de type 'quiz'
        $quizLessons = Lesson::where('type', 'quiz')->get();

        foreach ($quizLessons as $lesson) {
            Quiz::create([
                'lesson_id' => $lesson->id,
                'title' => "Quiz - {$lesson->title}",
                'description' => "Testez vos connaissances sur {$lesson->title}",
                'passing_score' => rand(60, 80), // 60% à 80%
                'time_limit' => rand(10, 30), // 10 à 30 minutes
                'max_attempts' => rand(2, 5),
                'shuffle_questions' => true,
                'show_correct_answers' => true,
                'is_published' => true,
            ]);
        }
    }
}
