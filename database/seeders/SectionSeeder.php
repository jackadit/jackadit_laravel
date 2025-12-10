<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            // Créer 3-5 sections par cours
            $sectionsCount = rand(3, 5);

            for ($i = 1; $i <= $sectionsCount; $i++) {
                Section::create([
                    'course_id' => $course->id,
                    'title' => $this->getSectionTitle($i),
                    'description' => $this->getSectionDescription($i),
                    'order' => $i,
                ]);
            }
        }
    }

    private function getSectionTitle(int $number): string
    {
        $titles = [
            1 => 'Introduction et Concepts de Base',
            2 => 'Les Fondamentaux',
            3 => 'Notions Avancées',
            4 => 'Mise en Pratique',
            5 => 'Projet Final et Conclusion',
        ];

        return $titles[$number] ?? "Section $number";
    }

    private function getSectionDescription(int $number): string
    {
        $descriptions = [
            1 => 'Découvrez les bases et préparez votre environnement de travail.',
            2 => 'Apprenez les concepts essentiels pour bien démarrer.',
            3 => 'Explorez les fonctionnalités avancées et les bonnes pratiques.',
            4 => 'Mettez en application vos connaissances avec des exercices pratiques.',
            5 => 'Consolidez vos acquis avec un projet complet de A à Z.',
        ];

        return $descriptions[$number] ?? "Description de la section $number";
    }
}
