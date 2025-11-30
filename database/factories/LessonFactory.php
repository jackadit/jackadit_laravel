<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LessonFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence(rand(3, 6));

        return [
            'course_id' => Course::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraph(),
            'content' => fake()->paragraphs(rand(3, 6), true),
            'video_url' => rand(0, 1) ? 'https://www.youtube.com/watch?v=' . Str::random(11) : null,
            'document_path' => null,
            'duration' => rand(5, 60),
            'order' => 0, // Sera défini dans le seeder
            'is_free' => fake()->boolean(20), // 20% de chances d'être gratuite
            'is_published' => fake()->boolean(80), // 80% de chances d'être publiée
        ];
    }
}
