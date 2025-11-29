<?php

namespace App\Providers;

use App\Services\CoursService;
use Illuminate\Support\ServiceProvider;

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
        //
    }
}
