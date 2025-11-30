<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizAttemptController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes Publiques
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Routes Authentifiées
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profil utilisateur
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Gestion des cours
    Route::resource('courses', CourseController::class);

    // ============================================
    // 📖 GESTION DES LEÇONS (imbriquées dans les cours)
    // ============================================
    Route::prefix('courses/{course}')->name('courses.lessons.')->group(function () {

        // CRUD classique
        Route::get('/lessons', [LessonController::class, 'index'])->name('index');
        Route::get('/lessons/create', [LessonController::class, 'create'])->name('create');
        Route::post('/lessons', [LessonController::class, 'store'])->name('store');
        Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('show');
        Route::get('/lessons/{lesson}/edit', [LessonController::class, 'edit'])->name('edit');
        Route::put('/lessons/{lesson}', [LessonController::class, 'update'])->name('update');
        Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])->name('destroy');

        // ⭐ Actions supplémentaires
        Route::post('/lessons/reorder', [LessonController::class, 'reorder'])->name('reorder');
        Route::post('/lessons/{lesson}/duplicate', [LessonController::class, 'duplicate'])->name('duplicate');
    });

    // Routes pour les QUIZ (formateur)
    Route::resource('courses.lessons.quizzes', QuizController::class)
        ->names([
            'index' => 'courses.lessons.quizzes.index',
            'create' => 'courses.lessons.quizzes.create',
            'store' => 'courses.lessons.quizzes.store',
            'show' => 'courses.lessons.quizzes.show',
            'edit' => 'courses.lessons.quizzes.edit',
            'update' => 'courses.lessons.quizzes.update',
            'destroy' => 'courses.lessons.quizzes.destroy',
        ]);

    // Routes pour les QUESTIONS (formateur)
    Route::resource('courses.lessons.quizzes.questions', QuestionController::class)
        ->names([
            'index' => 'courses.lessons.quizzes.questions.index',
            'create' => 'courses.lessons.quizzes.questions.create',
            'store' => 'courses.lessons.quizzes.questions.store',
            'show' => 'courses.lessons.quizzes.questions.show',
            'edit' => 'courses.lessons.quizzes.questions.edit',
            'update' => 'courses.lessons.quizzes.questions.update',
            'destroy' => 'courses.lessons.quizzes.questions.destroy',
        ]);

    // Routes pour passer les QUIZ (étudiant)
    Route::prefix('courses/{course}/lessons/{lesson}/quizzes/{quiz}')->group(function () {
        Route::post('/start', [QuizAttemptController::class, 'start'])->name('quiz-attempts.start');
        Route::get('/attempts/{attempt}', [QuizAttemptController::class, 'take'])->name('quiz-attempts.take');
        Route::post('/attempts/{attempt}/submit', [QuizAttemptController::class, 'submit'])->name('quiz-attempts.submit');
        Route::get('/attempts/{attempt}/result', [QuizAttemptController::class, 'result'])->name('quiz-attempts.result');
        Route::get('/history', [QuizAttemptController::class, 'history'])->name('quiz-attempts.history');
    });

});

/*
|--------------------------------------------------------------------------
| Routes d'authentification (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
