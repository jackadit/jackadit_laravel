<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::where('is_published', true)->get();

        foreach ($courses as $course) {
            // Créer 5 à 8 leçons par cours
            $lessonCount = rand(5, 8);

            for ($i = 1; $i <= $lessonCount; $i++) {
                $type = $i % 3 == 0 ? 'quiz' : ($i % 2 == 0 ? 'video' : 'text');

                Lesson::create([
                    'course_id' => $course->id,
                    'title' => "Leçon $i : " . $this->getLessonTitle($course->title, $i),
                    'slug' => Str::slug("lecon-$i-" . $course->slug),
                    'description' => "Description de la leçon $i du cours {$course->title}",
                    'content' => $this->getLessonContent($type, $i),
                    'order' => $i,
                    'type' => $type,
                    'video_url' => $type === 'video' ? "https://youtube.com/watch?v=example$i" : null,
                    'video_duration' => $type === 'video' ? rand(300, 1800) : null, // 5-30 min
                    'is_published' => true,
                    'is_preview' => $i === 1, // Première leçon en preview
                ]);
            }
        }
    }

    private function getLessonTitle(string $courseTitle, int $lessonNumber): string
    {
        $titles = [
            'Introduction et Installation',
            'Les Fondamentaux',
            'Concepts Avancés',
            'Pratique et Exercices',
            'Quiz de Validation',
            'Projet Pratique',
            'Optimisation',
            'Conclusion et Ressources',
        ];

        return $titles[$lessonNumber - 1] ?? "Leçon $lessonNumber";
    }

    private function getLessonContent(string $type, int $lessonNumber): string
    {
        if ($type === 'quiz') {
            return "Ce quiz teste vos connaissances de la leçon $lessonNumber.";
        }

        if ($type === 'video') {
            return "Regardez cette vidéo pour comprendre les concepts de la leçon $lessonNumber.\n\n**Points clés :**\n- Point 1\n- Point 2\n- Point 3";
        }

        return "## Contenu de la leçon $lessonNumber\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n\n### Section 1\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris.\n\n### Section 2\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.";
    }
}
