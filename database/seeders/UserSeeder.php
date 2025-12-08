<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Administrateur
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // 2. Instructeurs
        $instructors = [
            [
                'name' => 'Jean Dupont',
                'email' => 'jean.dupont@instructor.com',
                'bio' => 'Expert en développement web avec 10 ans d\'expérience',
            ],
            [
                'name' => 'Marie Martin',
                'email' => 'marie.martin@instructor.com',
                'bio' => 'Spécialiste Data Science et Machine Learning',
            ],
            [
                'name' => 'Pierre Durand',
                'email' => 'pierre.durand@instructor.com',
                'bio' => 'Designer UX/UI passionné',
            ],
        ];

        foreach ($instructors as $instructor) {
            User::create([
                'name' => $instructor['name'],
                'email' => $instructor['email'],
                'password' => Hash::make('password'),
                'role' => 'instructor',
                'bio' => $instructor['bio'],
                'email_verified_at' => now(),
            ]);
        }

        // 3. Étudiants
        $students = [
            'Sophie Bernard',
            'Lucas Petit',
            'Emma Roux',
            'Thomas Moreau',
            'Léa Simon',
            'Hugo Laurent',
            'Chloé Michel',
            'Alexandre Lefebvre',
        ];

        foreach ($students as $name) {
            User::create([
                'name' => $name,
                'email' => strtolower(str_replace(' ', '.', $name)) . '@student.com',
                'password' => Hash::make('password'),
                'role' => 'student',
                'email_verified_at' => now(),
            ]);
        }
    }
}
