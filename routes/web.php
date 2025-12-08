<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizAttemptController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController; // ✅ NOUVEAU
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes Publiques (Sans Authentification)
|--------------------------------------------------------------------------
*/

// ✅ Page d'accueil DYNAMIQUE
Route::get('/', [HomeController::class, 'index'])->name('home');

// ✅ Liste des cours PUBLIQUE (visiteurs peuvent voir)
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// ✅ Détail d'un cours PUBLIC (aperçu sans être inscrit)
Route::get('/courses/{course:slug}', [CourseController::class, 'publicShow'])->name('courses.show');

/*
|--------------------------------------------------------------------------
| Routes Authentifiées - Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Routes Profil Utilisateur
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Routes ÉTUDIANTS - Mes cours inscrits
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('my-courses')->name('student.')->group(function () {
    // Liste de MES cours (inscriptions)
    Route::get('/', [CourseController::class, 'myCourses'])->name('courses.index');

    // Accès à un cours inscrit (avec middleware course.access)
    Route::get('/{course:slug}', [CourseController::class, 'enrolledShow'])
        ->middleware('course.access')
        ->name('courses.show');
});

/*
|--------------------------------------------------------------------------
| Routes FORMATEURS - Gestion des cours
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:instructor'])
    ->prefix('instructor')
    ->name('instructor.')
    ->group(function () {

        // ========================================
        // GESTION DES COURS
        // ========================================

        Route::get('/courses/create', [CourseController::class, 'create'])
            ->name('courses.create');

        Route::post('/courses', [CourseController::class, 'store'])
            ->name('courses.store');

        // Routes nécessitant la propriété du cours
        Route::middleware('course.ownership')->group(function () {

            Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])
                ->name('courses.edit');

            Route::put('/courses/{course}', [CourseController::class, 'update'])
                ->name('courses.update');

            Route::delete('/courses/{course}', [CourseController::class, 'destroy'])
                ->name('courses.destroy');

            // Actions spécifiques cours
            Route::post('/courses/{course}/duplicate', [CourseController::class, 'duplicate'])
                ->name('courses.duplicate');

            Route::post('/courses/{course}/publish', [CourseController::class, 'publish'])
                ->name('courses.publish');

            Route::post('/courses/{course}/archive', [CourseController::class, 'archive'])
                ->name('courses.archive');

            // ========================================
            // GESTION DES LEÇONS
            // ========================================

            Route::prefix('courses/{course}/lessons')->name('lessons.')->group(function () {
                Route::get('/', [LessonController::class, 'index'])->name('index');
                Route::get('/create', [LessonController::class, 'create'])->name('create');
                Route::post('/', [LessonController::class, 'store'])->name('store');
                Route::get('/{lesson}', [LessonController::class, 'show'])->name('show');
                Route::get('/{lesson}/edit', [LessonController::class, 'edit'])->name('edit');
                Route::put('/{lesson}', [LessonController::class, 'update'])->name('update');
                Route::delete('/{lesson}', [LessonController::class, 'destroy'])->name('destroy');

                // Actions spécifiques
                Route::post('/{lesson}/duplicate', [LessonController::class, 'duplicate'])
                    ->name('duplicate');
                Route::post('/{lesson}/toggle-status', [LessonController::class, 'toggleStatus'])
                    ->name('toggle-status');
                Route::post('/reorder', [LessonController::class, 'reorder'])
                    ->name('reorder');
            });

            // ========================================
            // GESTION DES QUIZ
            // ========================================

            Route::prefix('courses/{course}/lessons/{lesson}/quizzes')->name('quizzes.')->group(function () {
                Route::get('/', [QuizController::class, 'index'])->name('index');
                Route::get('/create', [QuizController::class, 'create'])->name('create');
                Route::post('/', [QuizController::class, 'store'])->name('store');
                Route::get('/{quiz}', [QuizController::class, 'show'])->name('show');
                Route::get('/{quiz}/edit', [QuizController::class, 'edit'])->name('edit');
                Route::put('/{quiz}', [QuizController::class, 'update'])->name('update');
                Route::delete('/{quiz}', [QuizController::class, 'destroy'])->name('destroy');

                // Actions spécifiques
                Route::post('/{quiz}/duplicate', [QuizController::class, 'duplicate'])
                    ->name('duplicate');
                Route::post('/{quiz}/toggle-status', [QuizController::class, 'toggleStatus'])
                    ->name('toggle-status');

                // ========================================
                // GESTION DES QUESTIONS
                // ========================================

                Route::prefix('{quiz}/questions')->name('questions.')->group(function () {
                    Route::get('/create', [QuestionController::class, 'create'])->name('create');
                    Route::post('/', [QuestionController::class, 'store'])->name('store');
                    Route::get('/{question}/edit', [QuestionController::class, 'edit'])->name('edit');
                    Route::put('/{question}', [QuestionController::class, 'update'])->name('update');
                    Route::delete('/{question}', [QuestionController::class, 'destroy'])->name('destroy');

                    // Actions spécifiques
                    Route::post('/{question}/duplicate', [QuestionController::class, 'duplicate'])
                        ->name('duplicate');
                    Route::post('/reorder', [QuestionController::class, 'reorder'])
                        ->name('reorder');
                });

                // ========================================
                // SUIVI DES TENTATIVES (Vue instructeur)
                // ========================================

                Route::get('/{quiz}/attempts', [QuizAttemptController::class, 'instructorIndex'])
                    ->name('attempts.index');

                Route::get('/{quiz}/attempts/{attempt}', [QuizAttemptController::class, 'instructorShow'])
                    ->name('attempts.show');
            });
        });
    });

/*
|--------------------------------------------------------------------------
| Routes ÉTUDIANTS - Passage des quiz
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'course.access'])
    ->prefix('courses/{course}/lessons/{lesson}/quizzes/{quiz}')
    ->name('student.quizzes.')
    ->group(function () {

        // Démarrer une tentative
        Route::post('/start', [QuizAttemptController::class, 'start'])->name('start');

        // Historique des tentatives de l'étudiant
        Route::get('/my-attempts', [QuizAttemptController::class, 'myAttempts'])->name('my-attempts');

        // Gestion d'une tentative spécifique
        Route::prefix('attempts/{attempt}')->name('attempts.')->group(function () {
            Route::get('/', [QuizAttemptController::class, 'take'])->name('take');
            Route::post('/save-draft', [QuizAttemptController::class, 'saveDraft'])->name('save-draft');
            Route::post('/submit', [QuizAttemptController::class, 'submit'])->name('submit');
            Route::get('/result', [QuizAttemptController::class, 'result'])->name('result');
            Route::get('/review', [QuizAttemptController::class, 'review'])->name('review');
            Route::get('/certificate', [QuizAttemptController::class, 'certificate'])->name('certificate');
        });
    });

/*
|--------------------------------------------------------------------------
| Routes ÉTUDIANTS - Consultation des leçons
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'course.access'])
    ->prefix('courses/{course}/lessons')
    ->name('student.lessons.')
    ->group(function () {

        Route::get('/{lesson}', [LessonController::class, 'studentShow'])->name('show');
        Route::post('/{lesson}/complete', [LessonController::class, 'markComplete'])->name('complete');
    });

/*
|--------------------------------------------------------------------------
| Routes ADMINISTRATEUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard admin
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // ✅ Admin peut vider le cache
        Route::post('/admin/cache/clear', [HomeController::class, 'clearCache'])
            ->name('admin.cache.clear');

        // Gestion complète des cours (tous les formateurs)
        Route::resource('courses', CourseController::class);
    });

/*
|--------------------------------------------------------------------------
| Routes Auth (Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
