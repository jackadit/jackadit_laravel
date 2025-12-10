<?php

namespace App\Providers;

use App\Services\CoursService;
use Illuminate\Support\ServiceProvider;
use App\Observers\CourseObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Enregistrement du service CoursService
        $this->app->singleton(CoursService::class, function ($app) {
            return new CoursService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ============================================
        // ENREGISTREMENT DES ÉVÉNEMENTS
        // ============================================

        Event::listen(
            \App\Events\LessonCompleted::class,
            \App\Listeners\SendLessonCompletionNotification::class
        );

        Event::listen(
            \App\Events\CourseCompleted::class,
            \App\Listeners\GenerateCourseCertificate::class
        );

        Event::listen(
            \App\Events\StudentEnrolled::class,
            [
                \App\Listeners\SendEnrollmentConfirmation::class,
                \App\Listeners\NotifyInstructor::class,
            ]
        );

        Event::listen(
            \App\Events\QuizCompleted::class,
            \App\Listeners\UpdateQuizStatistic::class
        );

        // ============================================
        // GATES (Permissions) - SYSTÈME SANS SPATIE
        // ============================================

        // 🔒 Admin uniquement
        Gate::define('access-admin', function ($user) {
            return $user->role === 'admin';
        });

        // 🔒 Admin peut tout gérer
        Gate::define('manage-users', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('manage-all-courses', function ($user) {
            return $user->role === 'admin';
        });

        // 🔒 Instructor peut gérer ses propres cours
        Gate::define('manage-courses', function ($user) {
            return in_array($user->role, ['instructor', 'admin']);
        });

        Gate::define('edit-own-course', function ($user, $course) {
            return $user->role === 'instructor' && $course->instructor_id === $user->id;
        });

        // 🔒 Student peut suivre un cours si inscrit
        Gate::define('take-course', function ($user, $course) {
            return $user->enrollments()
                ->where('course_id', $course->id)
                ->exists();
        });
    }
}
