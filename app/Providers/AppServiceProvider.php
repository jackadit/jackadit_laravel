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
            \App\Listeners\UpdateQuizStatistics::class
        );

        // ============================================
        // GATES (Permissions)
        // ============================================

        Gate::define('manage-courses', function ($user) {
            return in_array($user->role, ['instructor', 'admin']);
        });

        Gate::define('access-admin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('take-course', function ($user, $course) {
            return $user->enrollments()
                ->where('course_id', $course->id)
                ->exists();
        });
    }
}
