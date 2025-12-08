<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Créer un administrateur
        User::firstOrCreate(
            ['email' => 'admin@test.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // 2. Créer un formateur
        User::firstOrCreate(
            ['email' => 'instructor@test.com'],
            [
                'name' => 'Test Instructor',
                'password' => Hash::make('password'),
                'role' => 'instructor',
                'email_verified_at' => now(),
            ]
        );

        // 3. Créer un étudiant
        User::firstOrCreate(
            ['email' => 'student@test.com'],
            [
                'name' => 'Test Student',
                'password' => Hash::make('password'),
                'role' => 'student',
                'email_verified_at' => now(),
            ]
        );

        // 4. Créer 10 étudiants supplémentaires
        User::factory(10)->student()->create();

        // 5. Créer 3 formateurs supplémentaires
        User::factory(3)->instructor()->create();
    }
}
