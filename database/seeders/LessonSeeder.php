<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $sections = Section::with('course')->get();

        foreach ($sections as $section) {
            $lessonsCount = rand(2, 5);

            for ($i = 1; $i <= $lessonsCount; $i++) {
                $title = $this->getLessonTitle($i);
                $type = $this->getLessonType($i);

                Lesson::create([
                    'course_id' => $section->course_id,
                    'section_id' => $section->id,
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'content' => $this->getLessonContent($title),
                    'type' => $type,
                    'video_url' => $type === 'video' ? $this->getVideoUrl() : null,
                    'duration_minutes' => rand(5, 30),
                    'order' => $i,
                    'is_free' => $i === 1,
                    'is_published' => true,
                    'is_preview' => $i <= 2,
                ]);
            }
        }
    }

    private function getLessonTitle(int $number): string
    {
        $titles = [
            "Introduction et présentation",
            "Les bases essentielles",
            "Concepts fondamentaux",
            "Mise en pratique",
            "Exercices guidés",
            "Cas d'usage avancés",
            "Projet pratique",
            "Quiz d'évaluation",
            "Bonnes pratiques",
            "Techniques avancées",
            "Optimisation et performance",
            "Conclusion et synthèse",
        ];

        $index = ($number - 1) % count($titles);
        return $titles[$index] . " #$number";
    }

    private function getLessonType(int $number): string
    {
        if ($number % 5 === 0) {
            return 'quiz';
        }

        return $number % 3 === 0 ? 'video' : 'article';
    }

    private function getLessonContent(string $title): string
    {
        // ✅ HEREDOC : PAS D'INDENTATION À L'INTÉRIEUR
        return <<<HTML
<h2>📚 {$title}</h2>

<p class="lead">Bienvenue dans cette leçon où nous allons explorer en détail <strong>{$title}</strong>.</p>

<hr>

<h3>🎯 Objectifs pédagogiques</h3>
<ul>
    <li>✅ Comprendre les concepts fondamentaux</li>
    <li>✅ Mettre en pratique avec des exemples concrets</li>
    <li>✅ Maîtriser les bonnes pratiques</li>
    <li>✅ Développer ses compétences progressivement</li>
</ul>

<hr>

<h3>📖 Prérequis</h3>
<p>Pour suivre cette leçon efficacement, assurez-vous d'avoir bien compris les leçons précédentes.</p>

<div class="alert alert-info">
    <strong>💡 Conseil :</strong> Prenez des notes et testez les exemples par vous-même !
</div>

<hr>

<h3>📝 Contenu détaillé</h3>

<h4>1️⃣ Introduction</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<h4>2️⃣ Explications théoriques</h4>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<h4>3️⃣ Exemple pratique</h4>
<pre><code class="language-javascript">
// Exemple de code JavaScript
function exemple() {
    const message = 'Hello World!';
    console.log(message);
    return true;
}

exemple();
</code></pre>

<h4>4️⃣ Cas d'usage</h4>
<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

<hr>

<h3>✨ Points clés à retenir</h3>
<ol>
    <li><strong>Point essentiel 1 :</strong> Explication concise et claire</li>
    <li><strong>Point essentiel 2 :</strong> Application pratique immédiate</li>
    <li><strong>Point essentiel 3 :</strong> Bonnes pratiques recommandées</li>
</ol>

<hr>

<h3>🔗 Ressources complémentaires</h3>
<ul>
    <li>📄 <a href="#">Documentation officielle</a></li>
    <li>📺 <a href="#">Tutoriels vidéo recommandés</a></li>
    <li>💬 <a href="#">Forum de discussion</a></li>
</ul>

<hr>

<div class="alert alert-success">
    <strong>🎓 Bravo !</strong> Vous avez terminé cette leçon. N'oubliez pas de passer au quiz pour valider vos acquis.
</div>
HTML;
    }

    private function getVideoUrl(): string
    {
        $videoIds = [
            'dQw4w9WgXcQ',
            'oHg5SJYRHA0',
            '9bZkp7q19f0',
            'kJQP7kiw5Fk',
            'L_jWHffIx5E',
        ];

        $randomId = $videoIds[array_rand($videoIds)];
        return "https://www.youtube.com/watch?v={$randomId}";
    }
}
