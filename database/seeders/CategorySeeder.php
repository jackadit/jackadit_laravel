<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Backend',
                'description' => 'Développement côté serveur (PHP, Laravel, APIs)',
                'icon' => 'server',
                'color' => '#3B82F6',
            ],
            [
                'name' => 'Frontend',
                'description' => 'Développement interfaces utilisateur (React, Vue, Angular)',
                'icon' => 'monitor',
                'color' => '#10B981',
            ],
            [
                'name' => 'Database',
                'description' => 'Bases de données et optimisation (MySQL, PostgreSQL)',
                'icon' => 'database',
                'color' => '#F59E0B',
            ],
            [
                'name' => 'DevOps',
                'description' => 'Déploiement et infrastructure (Docker, CI/CD)',
                'icon' => 'cloud',
                'color' => '#8B5CF6',
            ],
            [
                'name' => 'Design',
                'description' => 'UI/UX et design graphique (Figma, Adobe)',
                'icon' => 'palette',
                'color' => '#EC4899',
            ],
            [
                'name' => 'Mobile',
                'description' => 'Développement applications mobiles (Flutter, React Native)',
                'icon' => 'smartphone',
                'color' => '#06B6D4',
            ],
            [
                'name' => 'Security',
                'description' => 'Sécurité web et protection des données',
                'icon' => 'shield',
                'color' => '#EF4444',
            ],
            [
                'name' => 'Testing',
                'description' => 'Tests automatisés et qualité du code',
                'icon' => 'check-circle',
                'color' => '#14B8A6',
            ],
            [
                'name' => 'AI/ML',
                'description' => 'Intelligence artificielle et Machine Learning',
                'icon' => 'cpu',
                'color' => '#A855F7',
            ],
            [
                'name' => 'Data Science',
                'description' => 'Analyse de données et statistiques',
                'icon' => 'bar-chart',
                'color' => '#F97316',
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create([
                'name' => $categoryData['name'],
                'slug' => Str::slug($categoryData['name']),
                'description' => $categoryData['description'],
                'icon' => $categoryData['icon'] ?? 'folder',
                'color' => $categoryData['color'] ?? '#6B7280',
                'is_active' => true,
            ]);
        }

        $this->command->info('✅ ' . count($categories) . ' catégories créées avec succès !');
    }
}
