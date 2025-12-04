<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // admin, instructor, student
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ============================================
    // RELATIONS
    // ============================================

    /**
     * Cours créés par cet utilisateur (si instructeur)
     */
    public function createdCourses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }

    /**
     * Tentatives de quiz effectuées
     */
    public function quizAttempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    /**
     * Cours auxquels l'utilisateur est inscrit (relation future)
     * Note : La table 'enrollments' sera créée en Phase 2
     */
    public function enrolledCourses()
    {
        return $this->belongsToMany(Course::class, 'enrollments')
            ->withPivot('progress', 'enrolled_at', 'completed_at')
            ->withTimestamps();
    }

    // ============================================
    // HELPER METHODS
    // ============================================

    /**
     * Vérifie si l'utilisateur est administrateur
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    /**
     * Vérifie si l'utilisateur est formateur
     */
    public function isInstructor(): bool
    {
        return $this->role === 'instructor';
    }

    /**
     * Vérifie si l'utilisateur est étudiant
     */
    public function isStudent(): bool
    {
        return $this->role === 'student';
    }

    /**
     * Vérifie si l'utilisateur a un rôle spécifique
     */
    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }

    /**
     * Vérifie si l'utilisateur peut gérer un cours
     */
    public function canManageCourse(Course $course): bool
    {
        return $this->isAdmin() || $course->instructor_id === $this->id;
    }
}
