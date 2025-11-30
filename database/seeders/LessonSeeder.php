<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        // Pour chaque cours, créer entre 5 et 12 leçons
        Course::all()->each(function ($course) {
            $lessonCount = rand(5, 12);

            for ($i = 1; $i <= $lessonCount; $i++) {
                Lesson::factory()->create([
                    'course_id' => $course->id,
                    'order' => $i,
                ]);
            }
        });
    }
}
