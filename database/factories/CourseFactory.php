<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'description' => fake()->paragraph(5),
            'thumbnail' => fake()->imageUrl(640, 480, 'education', true),
            'price' => fake()->randomFloat(2, 0, 199),
            'is_published' => fake()->boolean(70),
            'instructor_id' => User::factory(),
        ];
    }
}
