<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Facades\Cache;

class CourseObserver
{
    /**
     * Vider le cache quand un cours est créé/modifié/supprimé
     */
    public function saved(Course $course)
    {
        $this->clearHomeCache();
    }

    public function deleted(Course $course)
    {
        $this->clearHomeCache();
    }

    private function clearHomeCache(): void
    {
        Cache::forget('home.featured_courses');
        Cache::forget('home.recent_courses');
        Cache::forget('home.popular_courses');
        Cache::forget('home.stats');
        Cache::forget('home.categories');
    }
}
