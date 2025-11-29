<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

// ============================================================================
// PAGE D'ACCUEIL
// ============================================================================

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// ============================================================================
// PAGES STATIQUES
// ============================================================================

Route::get('/a-propos', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

// ============================================================================
// COURS
// ============================================================================

Route::get('/cours', [CoursController::class, 'index'])
    ->name('cours.index');

Route::get('/cours/search', [CoursController::class, 'search'])
    ->name('cours.search');

Route::get('/cours/{category}', [CoursController::class, 'category'])
    ->name('cours.category')
    ->where('category', '[a-z-]+');

Route::get('/cours/{category}/{lesson}', [CoursController::class, 'lesson'])
    ->name('cours.lesson')
    ->where([
        'category' => '[a-z-]+',
        'lesson' => '[0-9]+'
    ]);
