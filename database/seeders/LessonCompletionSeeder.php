<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\Lesson;
use App\Models\LessonCompletion;
use Illuminate\Database\Seeder;

class LessonCompletionSeeder extends Seeder
{
    public function run(): void
    {
        $enrollments = Enrollment::all();

        foreach ($enrollments as $enrollment) {
            $lessons = Lesson::where('course_id', $enrollment->course_id)
                ->orderBy('order')
                ->get();

            // Compléter un certain nombre de leçons en fonction de la progression
            $lessonsToComplete = ceil($lessons->count() * ($enrollment->progress_percentage / 100));

            foreach ($lessons->take($lessonsToComplete) as $lesson) {
                LessonCompletion::create([
                    'user_id' => $enrollment->user_id,
                    'lesson_id' => $lesson->id,
                    'is_completed' => true,
                    'completed_at' => $enrollment->enrolled_at->addDays(rand(1, 10)),
                    'video_progress' => $lesson->video_duration ?? 0,
                    'watch_time' => $lesson->type === 'video' ? rand(100, $lesson->video_duration ?? 600) : 0,
                ]);
            }
        }
    }
}
