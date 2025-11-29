<?php

use App\Http\Controllers\CoursController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [CoursController::class, 'index'])
    ->name('home');

// Catégorie (intro + liste leçons)
Route::get('/cours/{category}', [CoursController::class, 'category'])
    ->name('cours.category')
    ->where('category', '[a-z]+');

// Leçon spécifique
Route::get('/cours/{category}/{lesson}', [CoursController::class, 'lesson'])
    ->name('cours.lesson')
    ->where([
        'category' => '[a-z]+',
        'lesson' => '[0-9]+'
    ]);
