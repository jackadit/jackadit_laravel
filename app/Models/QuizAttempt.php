<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuizAttempt extends Model
{
    use HasFactory;

    // ============================================
    // CONFIGURATION
    // ============================================

    protected $fillable = [
        'user_id',
        'quiz_id',
        'status',
        'score',
        'correct_answers',
        'max_score',
        'percentage',
        'total_questions',
        'passed',
        'time_spent',
        'started_at',
        'completed_at',
        'ip_address',
        'user_agent',
        'answers_summary',
    ];

    protected $casts = [
        'status' => 'string',
        'score' => 'integer',
        'correct_answers' => 'integer',
        'max_score' => 'integer',
        'percentage' => 'decimal:2',
        'total_questions' => 'integer',
        'passed' => 'boolean',
        'time_spent' => 'integer',
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
        'answers_summary' => 'array',
    ];

    // ============================================
    // RELATIONS
    // ============================================

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    /**
     * Réponses données durant cette tentative
     * ✅ RELATION PRINCIPALE
     */
    public function userQuizAnswers(): HasMany
    {
        return $this->hasMany(UserQuizAnswer::class);
    }

    // ============================================
    // MÉTHODES PRINCIPALES
    // ============================================

    /**
     * Démarre la tentative
     */
    public function start(): void
    {
        $this->update([
            'status' => 'in_progress',
            'started_at' => now(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    /**
     * Complète la tentative et calcule le score
     */
    public function complete(): void
    {
        $this->calculateScore();

        $this->update([
            'status' => 'completed',
            'completed_at' => now(),
            'time_spent' => $this->started_at
                ? now()->diffInSeconds($this->started_at)
                : 0,
        ]);
    }

    /**
     * Abandonne la tentative
     */
    public function abandon(): void
    {
        $this->update([
            'status' => 'abandoned',
            'completed_at' => now(),
        ]);
    }

    /**
     * Calcule le score total
     * ✅ UTILISE userQuizAnswers
     */
    public function calculateScore(): void
    {
        $quiz = $this->quiz;
        $totalQuestions = $quiz->questions()->count();

        // ✅ Utilisation de la bonne relation
        $correctAnswers = $this->userQuizAnswers()
            ->where('is_correct', true)
            ->count();

        // Calcul du score total (somme des points)
        $maxScore = $quiz->questions()->sum('points') ?: $totalQuestions;

        // ✅ Utilisation de la bonne relation
        $score = $this->userQuizAnswers()->sum('points_earned');

        $percentage = $maxScore > 0
            ? round(($score / $maxScore) * 100, 2)
            : 0;

        $passed = $percentage >= ($quiz->passing_score ?? 50);

        $this->update([
            'total_questions' => $totalQuestions,
            'correct_answers' => $correctAnswers,
            'score' => $score,
            'max_score' => $maxScore,
            'percentage' => $percentage,
            'passed' => $passed,
        ]);
    }

    // ============================================
    // ACCESSORS / HELPERS
    // ============================================

    /**
     * Vérifie si l'utilisateur a réussi
     */
    public function hasPassed(): bool
    {
        return $this->passed === true;
    }

    /**
     * Vérifie si la tentative est terminée
     */
    public function getIsCompletedAttribute(): bool
    {
        return $this->status === 'completed';
    }

    /**
     * Vérifie si la tentative est en cours
     */
    public function getIsInProgressAttribute(): bool
    {
        return $this->status === 'in_progress';
    }

    /**
     * Vérifie si la tentative est abandonnée
     */
    public function getIsAbandonedAttribute(): bool
    {
        return $this->status === 'abandoned';
    }

    /**
     * Score formaté "X/Y"
     */
    public function getFormattedScoreAttribute(): string
    {
        return "{$this->correct_answers}/{$this->total_questions}";
    }

    /**
     * Temps formaté (ex: "15m 32s")
     */
    public function getFormattedTimeAttribute(): string
    {
        if (!$this->time_spent) {
            return 'N/A';
        }

        $minutes = floor($this->time_spent / 60);
        $seconds = $this->time_spent % 60;

        return $minutes > 0
            ? "{$minutes}m {$seconds}s"
            : "{$seconds}s";
    }

    /**
     * Durée du quiz formatée
     */
    public function getDurationFormattedAttribute(): string
    {
        $duration = $this->quiz->duration ?? 0;
        return $duration > 0 ? "{$duration} min" : 'Illimité';
    }

    /**
     * Note sous forme de lettre (A, B, C, D, F)
     */
    public function getGradeAttribute(): string
    {
        $percentage = $this->percentage ?? 0;

        return match (true) {
            $percentage >= 90 => 'A',
            $percentage >= 80 => 'B',
            $percentage >= 70 => 'C',
            $percentage >= 60 => 'D',
            default => 'F',
        };
    }

    /**
     * Label du statut en français
     */
    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'in_progress' => 'En cours',
            'completed' => 'Terminé',
            'abandoned' => 'Abandonné',
            default => 'Inconnu',
        };
    }

    /**
     * Couleur du statut (pour UI)
     */
    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            'in_progress' => 'blue',
            'completed' => $this->passed ? 'green' : 'red',
            'abandoned' => 'orange',
            default => 'gray',
        };
    }

    /**
     * Badge de statut (emoji + texte)
     */
    public function getStatusBadgeAttribute(): string
    {
        return match ($this->status) {
            'in_progress' => '⏳ En cours',
            'completed' => $this->passed ? '✅ Réussi' : '❌ Échoué',
            'abandoned' => '🚫 Abandonné',
            default => '❓ Inconnu',
        };
    }

    /**
     * Statistiques détaillées
     */
    public function getDetailedStats(): array
    {
        $answers = $this->userQuizAnswers;
        $totalAnswered = $answers->whereNotNull('answer_id')->count();

        return [
            'score' => $this->score,
            'max_score' => $this->max_score,
            'correct_answers' => $this->correct_answers,
            'incorrect_answers' => $totalAnswered - $this->correct_answers,
            'unanswered' => $this->total_questions - $totalAnswered,
            'total_questions' => $this->total_questions,
            'percentage' => $this->percentage,
            'passed' => $this->passed,
            'grade' => $this->grade,
            'time_spent' => $this->time_spent,
            'formatted_time' => $this->formatted_time,
            'formatted_score' => $this->formatted_score,
            'status' => $this->status,
            'status_label' => $this->status_label,
            'status_badge' => $this->status_badge,
            'status_color' => $this->status_color,
        ];
    }

    // ============================================
    // SCOPES
    // ============================================

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeInProgress($query)
    {
        return $query->where('status', 'in_progress');
    }

    public function scopePassed($query)
    {
        return $query->where('passed', true);
    }

    public function scopeFailed($query)
    {
        return $query->where('passed', false)->where('status', 'completed');
    }

    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeForQuiz($query, $quizId)
    {
        return $query->where('quiz_id', $quizId);
    }
}
