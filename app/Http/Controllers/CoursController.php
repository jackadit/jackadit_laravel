<?php

namespace App\Http\Controllers;

use App\Services\CoursService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CoursController extends Controller
{
    public function __construct(
        private readonly CoursService $coursService
    ) {}

    /**
     * Page d'accueil : liste des catégories
     */
    public function index(): View
    {
        $categories = $this->coursService->getCategories();

        return view('cours.index', [
            'categories' => $categories,
            'pageTitle' => 'Tous les cours - Jackadit.com',
        ]);
    }

    /**
     * Page catégorie : introduction + liste des leçons
     */
    public function category(string $category): View|RedirectResponse
    {
        // Vérification existence
        if (!$this->coursService->categoryExists($category)) {
            abort(404, "Catégorie '{$category}' introuvable");
        }

        $intro = $this->coursService->getLesson($category);
        $lessons = $this->coursService->getLessons($category);

        return view('cours.category', [
            'intro' => $intro,
            'category' => $category,
            'lessons' => $lessons,
            'pageTitle' => $intro['title'] . ' - Jackadit.com',
        ]);
    }

    /**
     * Page leçon : contenu + navigation
     */
    public function lesson(string $category, int $lesson): View
    {
        // Vérification existence catégorie
        if (!$this->coursService->categoryExists($category)) {
            abort(404, "Catégorie '{$category}' introuvable");
        }

        // Vérification existence leçon
        if (!$this->coursService->lessonExists($category, $lesson)) {
            abort(404, "Leçon {$lesson} introuvable dans la catégorie '{$category}'");
        }

        $lessonData = $this->coursService->getLesson($category, $lesson);
        $navigation = $this->coursService->getNavigation($category, $lesson);

        return view('cours.lesson', [
            'lesson' => $lessonData,
            'navigation' => $navigation,
            'category' => $category,
            'pageTitle' => $lessonData['title'] . ' - Jackadit.com',
        ]);
    }
}
