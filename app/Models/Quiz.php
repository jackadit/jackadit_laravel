<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    // ============================================
    // CONFIGURATION
    // ============================================

    protected $fillable = [
        'lesson_id',
        'title',
        'description',
        'passing_score',
        'time_limit',
        'max_attempts',
        'shuffle_questions',
        'show_correct_answers',
        'is_active',
    ];

    protected $casts = [
        'passing_score' => 'integer',          // ⭐ AJOUTÉ
        'time_limit' => 'integer',             // ⭐ AJOUTÉ
        'max_attempts' => 'integer',           // ⭐ AJOUTÉ
        'shuffle_questions' => 'boolean',
        'show_correct_answers' => 'boolean',
        'is_active' => 'boolean',
    ];

    // ============================================
    // RELATIONS
    // ============================================

    /**
     * Un quiz appartient à une leçon
     */
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    /**
     * ⭐ NOUVEAU : Accès direct au cours via la leçon
     */
    public function course()
    {
        return $this->hasOneThrough(
            Course::class,
            Lesson::class,
            'id',           // Foreign key on lessons table
            'id',           // Foreign key on courses table
            'lesson_id',    // Local key on quizzes table
            'course_id'     // Local key on lessons table
        );
    }

    /**
     * Un quiz a plusieurs questions
     */
    public function questions()
    {
        return $this->hasMany(Question::class)->orderBy('order');
    }

    /**
     * Un quiz a plusieurs tentatives
     */
    public function attempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    // ============================================
    // SCOPES
    // ============================================

    /**
     * ⭐ NOUVEAU : Quiz actifs uniquement
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * ⭐ NOUVEAU : Quiz d'une leçon spécifique
     */
    public function scopeOfLesson($query, $lessonId)
    {
        return $query->where('lesson_id', $lessonId);
    }

    /**
     * ⭐ NOUVEAU : Avec le nombre de questions
     */
    public function scopeWithQuestionCount($query)
    {
        return $query->withCount('questions');
    }

    // ============================================
    // ACCESSORS
    // ============================================

    /**
     * ⭐ NOUVEAU : Durée formatée
     */
    public function getFormattedDurationAttribute(): string
    {
        if (!$this->time_limit) {
            return 'Illimité';
        }

        return $this->time_limit . ' min';
    }

    /**
     * ⭐ NOUVEAU : Quiz avec temps limité ?
     */
    public function getIsTimeLimitedAttribute(): bool
    {
        return $this->time_limit !== null && $this->time_limit > 0;
    }

    /**
     * ⭐ NOUVEAU : Label du type de quiz
     */
    public function getTypeLabelAttribute(): string
    {
        return $this->shuffle_questions ? 'Questions aléatoires' : 'Questions ordonnées';
    }

    /**
     * ⭐ NOUVEAU : Nombre total de questions
     */
    public function getTotalQuestionsAttribute(): int
    {
        return $this->questions()->count();
    }

    // ============================================
    // HELPER METHODS
    // ============================================

    /**
     * Calcule le total des points du quiz
     */
    public function totalPoints(): int
    {
        return $this->questions()->sum('points');
    }

    /**
     * Récupère toutes les tentatives d'un utilisateur
     */
    public function userAttempts($userId)
    {
        return $this->attempts()
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * ⭐ AMÉLIORÉ : Vérifie si un utilisateur peut tenter le quiz
     */
    public function canUserAttempt($userId): bool
    {
        // Quiz inactif
        if (!$this->is_active) {
            return false;
        }

        // Tentatives illimitées
        if ($this->max_attempts === null || $this->max_attempts === 0) {
            return true;
        }

        $attemptsCount = $this->attempts()
            ->where('user_id', $userId)
            ->count();

        return $attemptsCount < $this->max_attempts;
    }

    /**
     * ⭐ AMÉLIORÉ : Meilleur score d'un utilisateur
     */
    public function bestScore($userId): int
    {
        return $this->attempts()
            ->where('user_id', $userId)
            ->max('score') ?? 0;
    }

    /**
     * Tentatives restantes pour un utilisateur
     */
    public function getRemainingAttempts($userId): int
    {
        // Tentatives illimitées
        if ($this->max_attempts === null || $this->max_attempts === 0) {
            return PHP_INT_MAX; // ⭐ AMÉLIORÉ
        }

        $attempts = $this->attempts()
            ->where('user_id', $userId)
            ->count();

        return max(0, $this->max_attempts - $attempts);
    }

    /**
     * ⭐ NOUVEAU : Dernière tentative d'un utilisateur
     */
    public function lastAttempt($userId): ?QuizAttempt
    {
        return $this->attempts()
            ->where('user_id', $userId)
            ->latest()
            ->first();
    }

    /**
     * ⭐ NOUVEAU : L'utilisateur a-t-il réussi ce quiz ?
     */
    public function hasPassed($userId): bool
    {
        return $this->attempts()
            ->where('user_id', $userId)
            ->where('passed', true)
            ->exists();
    }

    /**
     * ⭐ NOUVEAU : Pourcentage de réussite moyen
     */
    public function averageScore(): float
    {
        return $this->attempts()
            ->where('completed_at', '!=', null)
            ->avg('percentage') ?? 0;
    }
}
