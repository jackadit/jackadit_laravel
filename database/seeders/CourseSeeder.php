<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Créer des enseignants
        $teachers = User::factory()->count(3)->create();

        // Créer des cours
        Course::factory()->count(12)->create([
            'instructor_id' => $teachers->random()->id,
        ]);
    }
}
