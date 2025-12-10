<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\CourseOwnershipMiddleware;
use App\Http\Middleware\CourseAccessMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            // ✅ Middleware générique pour tous les rôles
            'role' => RoleMiddleware::class,

            // ✅ Alias spécifiques (utilisent RoleMiddleware)
            //'instructor' => RoleMiddleware::class . ':instructor',
            //'admin' => RoleMiddleware::class . ':admin',
            //'student' => RoleMiddleware::class . ':student',

            // ✅ Middlewares cours
            'course.ownership' => CourseOwnershipMiddleware::class,
            'course.access' => CourseAccessMiddleware::class,
            'lesson.access' => LessonAccessMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
