<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // ============================================
            // 1️⃣ UTILISATEURS
            // ============================================
            UserSeeder::class,

            // ============================================
            // 2️⃣ COURS
            // ============================================
            CategorySeeder::class,
            CourseSeeder::class,
            LessonSeeder::class,

            // ============================================
            // 3️⃣ QUIZ (ORDRE IMPORTANT !)
            // ============================================
            QuizSeeder::class,           // 1. Créer les quiz
            QuestionSeeder::class,       // 2. Créer les questions
            AnswerSeeder::class,         // 3. Créer les réponses

            // ============================================
            // 4️⃣ INSCRIPTIONS & TENTATIVES
            // ============================================
            EnrollmentSeeder::class,
            QuizAttemptSeeder::class,
            UserQuizAnswerSeeder::class,
        ]);
    }
}
