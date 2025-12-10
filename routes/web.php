<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 🏠 ROUTES PUBLIQUES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Catalogue public des cours
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

/*
|--------------------------------------------------------------------------
| 🔐 ROUTES AUTHENTIFIÉES (tous rôles)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Dashboard principal (redirige selon le rôle)
    Route::get('/dashboard', function () {
        $user = auth()->user();

        return match($user->role) {
            'admin' => redirect()->route('admin.dashboard'),
            'instructor' => redirect()->route('instructor.dashboard'),
            'student' => redirect()->route('student.dashboard'),
            default => abort(403),
        };
    })->name('dashboard');

    // Profil utilisateur
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});

/*
|--------------------------------------------------------------------------
| 👨‍🎓 ROUTES ÉTUDIANT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'role:student'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [Student\DashboardController::class, 'index'])->name('dashboard');

    // Mes inscriptions
    Route::get('/enrollments', [Student\EnrollmentController::class, 'index'])->name('enrollments.index');
    Route::get('/enrollments/{enrollment}', [Student\EnrollmentController::class, 'show'])->name('enrollments.show');
    Route::post('/courses/{course}/enroll', [Student\EnrollmentController::class, 'store'])->name('courses.enroll');
});

/*
|--------------------------------------------------------------------------
| 👨‍🏫 ROUTES INSTRUCTEUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'role:instructor'])->prefix('instructor')->name('instructor.')->group(function () {
    Route::get('/dashboard', [Instructor\DashboardController::class, 'index'])->name('dashboard');

    // Gestion de MES cours
    Route::resource('courses', Instructor\CourseController::class);
});

/*
|--------------------------------------------------------------------------
| 👑 ROUTES ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('dashboard');

    // Gestion utilisateurs
    Route::resource('users', Admin\UserController::class);

    // Gestion cours
    Route::get('/courses', [Admin\CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{course}', [Admin\CourseController::class, 'show'])->name('courses.show');
    Route::post('/courses/{course}/approve', [Admin\CourseController::class, 'approve'])->name('courses.approve');
    Route::post('/courses/{course}/reject', [Admin\CourseController::class, 'reject'])->name('courses.reject');
    Route::delete('/courses/{course}', [Admin\CourseController::class, 'destroy'])->name('courses.destroy');

    // Gestion catégories
    Route::resource('categories', Admin\CategoryController::class);

    // Gestion pages statiques
    Route::get('/pages', [Admin\PageController::class, 'index'])->name('pages.index');
    Route::get('/pages/{page}/edit', [Admin\PageController::class, 'edit'])->name('pages.edit');
    Route::put('/pages/{page}', [Admin\PageController::class, 'update'])->name('pages.update');
});

/*
|--------------------------------------------------------------------------
| 🔐 AUTH ROUTES (Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
