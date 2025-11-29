<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class CoursService
{
    private string $basePath;

    public function __construct()
    {
        $this->basePath = base_path('content/cours');
    }

    /**
     * Récupère toutes les catégories de cours
     */
    public function getCategories(): Collection
    {
        return Cache::remember('categories', now()->addDay(), function () {
            $directories = File::directories($this->basePath);

            return collect($directories)
                ->map(function ($dir) {
                    $slug = basename($dir);
                    $config = $this->getCategoryConfig($slug);

                    return [
                        'slug' => $slug,
                        'title' => $config['title'] ?? $this->getCategoryTitle($slug),
                        'description' => $config['description'] ?? '',
                        'icon' => $config['icon'] ?? '📚',
                        'lessonsCount' => $this->countLessons($slug),
                        'order' => $config['order'] ?? 999,
                    ];
                })
                ->sortBy('order')
                ->values();
        });
    }

    /**
     * Récupère la configuration d'une catégorie (config.json)
     */
    private function getCategoryConfig(string $category): array
    {
        $configPath = "{$this->basePath}/{$category}/config.json";

        if (!File::exists($configPath)) {
            return [];
        }

        $json = File::get($configPath);
        return json_decode($json, true) ?? [];
    }

    /**
     * Récupère le titre d'une catégorie depuis son fichier intro
     */
    private function getCategoryTitle(string $category): string
    {
        $introPath = "{$this->basePath}/{$category}/{$category}.inc.php";

        if (!File::exists($introPath)) {
            return Str::title($category);
        }

        $content = File::get($introPath);
        preg_match('/<h1>(.*?)<\/h1>/', $content, $matches);

        return $matches[1] ?? Str::title($category);
    }

    /**
     * Compte le nombre de leçons dans une catégorie
     */
    private function countLessons(string $category): int
    {
        $files = File::glob("{$this->basePath}/{$category}/{$category}*.inc.php");
        return max(0, count($files) - 1); // -1 pour enlever le fichier intro
    }

    /**
     * Récupère une leçon spécifique (avec cache)
     */
    public function getLesson(string $category, ?int $lessonNumber = null): array
    {
        $cacheKey = "lesson.{$category}." . ($lessonNumber ?? 'intro');

        // Cache flexible Laravel 12 (grace period 5-10 min)
        return Cache::flexible(
            $cacheKey,
            [now()->addMinutes(5), now()->addMinutes(10)],
            fn() => $this->loadLesson($category, $lessonNumber)
        );
    }

    /**
     * Charge une leçon depuis le fichier
     */
    private function loadLesson(string $category, ?int $lessonNumber): array
    {
        $filename = $lessonNumber
            ? "{$category}{$lessonNumber}.inc.php"
            : "{$category}.inc.php";

        $path = "{$this->basePath}/{$category}/{$filename}";

        if (!File::exists($path)) {
            abort(404, "Leçon introuvable : {$filename}");
        }

        $content = File::get($path);

        // Extraction du titre
        preg_match('/<h1>(.*?)<\/h1>/', $content, $matches);
        $title = $matches[1] ?? Str::title($category);

        // Sécurisation des liens externes
        $content = $this->secureExternalLinks($content);

        return [
            'title' => $title,
            'content' => $content,
            'category' => $category,
            'lesson' => $lessonNumber,
            'slug' => Str::slug($title),
            'path' => $path,
        ];
    }

    /**
     * Sécurise les liens externes (ajout rel="noopener noreferrer")
     */
    private function secureExternalLinks(string $content): string
    {
        // Liens avec class="external"
        $content = preg_replace(
            '/<a([^>]*?)class="([^"]*?)external([^"]*?)"([^>]*?)>/',
            '<a$1class="$2external$3"$4 rel="nofollow noopener noreferrer" target="_blank">',
            $content
        );

        // Liens avec rel="nofollow" sans noopener
        $content = preg_replace(
            '/rel="nofollow"(?!\s+noopener)/',
            'rel="nofollow noopener noreferrer"',
            $content
        );

        return $content;
    }

    /**
     * Récupère toutes les leçons d'une catégorie
     */
    public function getLessons(string $category): Collection
    {
        $files = File::glob("{$this->basePath}/{$category}/{$category}*.inc.php");

        return collect($files)
            ->map(function ($file) use ($category) {
                $basename = basename($file, '.inc.php');
                preg_match("/{$category}(\d*)$/", $basename, $matches);
                $number = $matches[1] ? (int)$matches[1] : null;

                // Récupère le titre
                $content = File::get($file);
                preg_match('/<h1>(.*?)<\/h1>/', $content, $titleMatches);

                return [
                    'number' => $number,
                    'title' => $titleMatches[1] ?? ($number ? "Leçon {$number}" : "Introduction"),
                    'url' => $number
                        ? route('cours.lesson', [$category, $number])
                        : route('cours.category', $category),
                    'isIntro' => is_null($number),
                ];
            })
            ->sortBy(fn($lesson) => $lesson['number'] ?? -1)
            ->values();
    }

    /**
     * Navigation précédent/suivant
     */
    public function getNavigation(string $category, ?int $current = null): array
    {
        $lessons = $this->getLessons($category);

        $currentIndex = $lessons->search(fn($l) => $l['number'] === $current);

        if ($currentIndex === false) {
            $currentIndex = 0;
        }

        return [
            'prev' => $currentIndex > 0 ? $lessons[$currentIndex - 1] : null,
            'next' => $currentIndex < $lessons->count() - 1 ? $lessons[$currentIndex + 1] : null,
            'all' => $lessons,
            'current' => $current,
        ];
    }

    /**
     * Vérifie si une catégorie existe
     */
    public function categoryExists(string $category): bool
    {
        return File::isDirectory("{$this->basePath}/{$category}");
    }

    /**
     * Vérifie si une leçon existe
     */
    public function lessonExists(string $category, int $lessonNumber): bool
    {
        $filename = "{$category}{$lessonNumber}.inc.php";
        $path = "{$this->basePath}/{$category}/{$filename}";

        return File::exists($path);
    }
}
