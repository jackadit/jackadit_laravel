<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('📚 Création des cours...');

        $instructors = User::where('role', 'instructor')->get();
        $categories = Category::where('is_active', true)->get();

        // Vérifications
        if ($instructors->isEmpty()) {
            $this->command->error('❌ Aucun instructeur trouvé !');
            return;
        }

        if ($categories->isEmpty()) {
            $this->command->error('❌ Aucune catégorie active trouvée !');
            return;
        }

        $this->command->info("✅ {$instructors->count()} instructeurs et {$categories->count()} catégories disponibles");

        $courses = [
            [
                'title' => 'Laravel 11 : Le Guide Complet',
                'category_slug' => 'backend',
                'level' => 'intermediate',
                'price' => 99.99,
                'duration' => 1200,
                'description' => 'Maîtrisez Laravel 11 de A à Z avec ce cours complet.',
                'short_description' => 'Formation complète Laravel 11',
            ],
            [
                'title' => 'PHP 8.3 : Les Fondamentaux',
                'category_slug' => 'backend',
                'level' => 'beginner',
                'price' => 79.99,
                'duration' => 800,
                'description' => 'Apprenez PHP 8.3 et ses dernières fonctionnalités.',
                'short_description' => 'Débuter avec PHP 8.3',
            ],
            [
                'title' => 'Vue.js 3 : Créer des Interfaces Modernes',
                'category_slug' => 'frontend',
                'level' => 'intermediate',
                'price' => 89.99,
                'duration' => 900,
                'description' => 'Développez des applications web réactives avec Vue.js 3.',
                'short_description' => 'Vue.js 3 pour débutants',
            ],
            [
                'title' => 'React : Les Bases Complètes',
                'category_slug' => 'frontend',
                'level' => 'beginner',
                'price' => 69.99,
                'duration' => 700,
                'description' => 'Introduction complète à React et ses concepts.',
                'short_description' => 'Débuter avec React',
            ],
            [
                'title' => 'MySQL : Optimisation et Performance',
                'category_slug' => 'database',
                'level' => 'advanced',
                'price' => 119.99,
                'duration' => 600,
                'description' => 'Optimisez vos bases de données MySQL.',
                'short_description' => 'Maîtriser MySQL',
            ],
            [
                'title' => 'Docker pour Développeurs',
                'category_slug' => 'devops',
                'level' => 'intermediate',
                'price' => 109.99,
                'duration' => 800,
                'description' => 'Conteneurisez vos applications avec Docker.',
                'short_description' => 'Docker de A à Z',
            ],
            [
                'title' => 'Tailwind CSS : Design Moderne',
                'category_slug' => 'frontend',
                'level' => 'beginner',
                'price' => 49.99,
                'duration' => 500,
                'description' => 'Créez des interfaces élégantes avec Tailwind CSS.',
                'short_description' => 'Tailwind pour tous',
            ],
            [
                'title' => 'API REST avec Laravel',
                'category_slug' => 'backend',
                'level' => 'advanced',
                'price' => 129.99,
                'duration' => 1000,
                'description' => 'Développez des APIs professionnelles avec Laravel.',
                'short_description' => 'APIs REST avancées',
            ],
            [
                'title' => 'JavaScript ES2024 : Les Nouveautés',
                'category_slug' => 'frontend',
                'level' => 'intermediate',
                'price' => 59.99,
                'duration' => 600,
                'description' => 'Découvrez les dernières fonctionnalités JavaScript.',
                'short_description' => 'JavaScript moderne',
            ],
            [
                'title' => 'Git & GitHub : Collaboration Pro',
                'category_slug' => 'devops',
                'level' => 'beginner',
                'price' => 39.99,
                'duration' => 400,
                'description' => 'Maîtrisez Git et GitHub pour vos projets.',
                'short_description' => 'Git pour débutants',
            ],
        ];

        $createdCount = 0;

        foreach ($courses as $courseData) {
            $category = $categories->firstWhere('slug', $courseData['category_slug']);

            if (!$category) {
                $this->command->warn("⚠️  Catégorie '{$courseData['category_slug']}' introuvable, cours ignoré : {$courseData['title']}");
                continue;
            }

            $instructor = $instructors->random();
            $slug = Str::slug($courseData['title']);

            Course::create([
                'title' => $courseData['title'],
                'slug' => $slug,
                'description' => $courseData['description'],
                'short_description' => $courseData['short_description'],
                'instructor_id' => $instructor->id,
                'category_id' => $category->id,
                'level' => $courseData['level'],
                'language' => 'fr',
                'price' => $courseData['price'],
                'duration' => $courseData['duration'],
                'thumbnail' => "thumbnails/{$slug}.jpg",
                'video_preview' => "previews/{$slug}.mp4",
                'status' => 'published',
                'is_published' => true, // ⚠️ CRITIQUE
                'is_featured' => rand(0, 1),
                'enrollment_count' => rand(50, 500),
                'rating' => rand(40, 50) / 10,
                'reviews_count' => rand(20, 100),
                'published_at' => now()->subDays(rand(30, 365)),
            ]);

            $createdCount++;
        }

        $this->command->info("✅ {$createdCount} cours créés avec succès !");
    }
}
