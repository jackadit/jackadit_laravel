<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    public function definition(): array
    {
        return [
            'lesson_id' => Lesson::factory(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'passing_score' => fake()->numberBetween(50, 80),
            'time_limit' => fake()->numberBetween(10, 60),
        ];
    }
}
