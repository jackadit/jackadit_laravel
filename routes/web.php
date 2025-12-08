<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizAttemptController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes Publiques
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Routes Authentifiées - Dashboard
|--------------------------------------------------------------------------
*/

// ✅ CORRECTION : Utilise le contrôleur au lieu d'une closure
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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
| Routes COURS (Accessibles à tous les utilisateurs connectés)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    // Liste et détails des cours
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
});

/*
|--------------------------------------------------------------------------
| Routes FORMATEURS (instructor) - Gestion des cours
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:instructor'])->prefix('instructor')->name('instructor.')->group(function () {

    // === GESTION DES COURS ===
    Route::resource('courses', CourseController::class)->except(['index', 'show']);

    // Actions spécifiques cours
    Route::post('courses/{course}/duplicate', [CourseController::class, 'duplicate'])
        ->name('courses.duplicate');
    Route::post('courses/{course}/publish', [CourseController::class, 'publish'])
        ->name('courses.publish');
    Route::post('courses/{course}/archive', [CourseController::class, 'archive'])
        ->name('courses.archive');

    // === GESTION DES LEÇONS ===
    Route::prefix('courses/{course}/lessons')->name('lessons.')->group(function () {
        Route::get('/', [LessonController::class, 'index'])->name('index');
        Route::get('/create', [LessonController::class, 'create'])->name('create');
        Route::post('/', [LessonController::class, 'store'])->name('store');
        Route::get('/{lesson}', [LessonController::class, 'show'])->name('show');
        Route::get('/{lesson}/edit', [LessonController::class, 'edit'])->name('edit');
        Route::put('/{lesson}', [LessonController::class, 'update'])->name('update');
        Route::delete('/{lesson}', [LessonController::class, 'destroy'])->name('destroy');

        // Actions spécifiques leçons
        Route::post('/{lesson}/duplicate', [LessonController::class, 'duplicate'])->name('duplicate');
        Route::post('/{lesson}/toggle-status', [LessonController::class, 'toggleStatus'])->name('toggle-status');
        Route::post('/reorder', [LessonController::class, 'reorder'])->name('reorder');
    });

    // === GESTION DES QUIZ ===
    Route::prefix('courses/{course}/lessons/{lesson}/quizzes')->name('quizzes.')->group(function () {
        Route::get('/', [QuizController::class, 'index'])->name('index');
        Route::get('/create', [QuizController::class, 'create'])->name('create');
        Route::post('/', [QuizController::class, 'store'])->name('store');
        Route::get('/{quiz}', [QuizController::class, 'show'])->name('show');
        Route::get('/{quiz}/edit', [QuizController::class, 'edit'])->name('edit');
        Route::put('/{quiz}', [QuizController::class, 'update'])->name('update');
        Route::delete('/{quiz}', [QuizController::class, 'destroy'])->name('destroy');

        // Actions spécifiques quiz
        Route::post('/{quiz}/duplicate', [QuizController::class, 'duplicate'])->name('duplicate');
        Route::post('/{quiz}/toggle-status', [QuizController::class, 'toggleStatus'])->name('toggle-status');
    });

    // === GESTION DES QUESTIONS ===
    Route::prefix('courses/{course}/lessons/{lesson}/quizzes/{quiz}/questions')->name('questions.')->group(function () {
        Route::get('/create', [QuestionController::class, 'create'])->name('create');
        Route::post('/', [QuestionController::class, 'store'])->name('store');
        Route::get('/{question}/edit', [QuestionController::class, 'edit'])->name('edit');
        Route::put('/{question}', [QuestionController::class, 'update'])->name('update');
        Route::delete('/{question}', [QuestionController::class, 'destroy'])->name('destroy');

        // Actions spécifiques questions
        Route::post('/{question}/duplicate', [QuestionController::class, 'duplicate'])->name('duplicate');
        Route::post('/reorder', [QuestionController::class, 'reorder'])->name('reorder');
    });

    // === SUIVI DES TENTATIVES (Instructeur) ===
    Route::get('courses/{course}/lessons/{lesson}/quizzes/{quiz}/attempts',
        [QuizAttemptController::class, 'index']
    )->name('quiz-attempts.index');
});

/*
|--------------------------------------------------------------------------
| Routes ÉTUDIANTS - Passage des quiz
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'course.access'])->group(function () {

    // === PASSAGE DES QUIZ ===
    Route::prefix('courses/{course}/lessons/{lesson}/quizzes/{quiz}')->name('quiz-attempts.')->group(function () {

        // Démarrer une tentative
        Route::post('/start', [QuizAttemptController::class, 'start'])->name('start');

        // Historique des tentatives
        Route::get('/history', [QuizAttemptController::class, 'history'])->name('history');

        // Gestion d'une tentative spécifique
        Route::prefix('/attempts/{attempt}')->group(function () {
            Route::get('/', [QuizAttemptController::class, 'take'])->name('take');
            Route::post('/save-draft', [QuizAttemptController::class, 'saveDraft'])->name('save-draft');
            Route::post('/submit', [QuizAttemptController::class, 'submit'])->name('submit');
            Route::get('/result', [QuizAttemptController::class, 'result'])->name('result');
            Route::get('/review', [QuizAttemptController::class, 'review'])->name('review');
            Route::get('/certificate', [QuizAttemptController::class, 'certificate'])->name('certificate');
        });
    });
});

/*
|--------------------------------------------------------------------------
| Routes ADMINISTRATEUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Gestion des utilisateurs (à créer)
    // Route::resource('users', UserController::class);

    // Statistiques globales (à créer)
    // Route::get('/stats', [AdminController::class, 'stats'])->name('stats');
});

/*
|--------------------------------------------------------------------------
| Routes Auth (Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
