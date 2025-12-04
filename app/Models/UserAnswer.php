<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAnswer extends Model
{
    // ============================================
    // CONFIGURATION
    // ============================================

    protected $fillable = [
        'user_id',
        'quiz_attempt_id',
        'question_id',
        'answer_id',
        'answer_text',
        'is_correct',
        'points_earned',
        'time_spent',
        'answered_at',
    ];

    protected $casts = [
        'is_correct' => 'boolean',
        'points_earned' => 'integer',
        'time_spent' => 'integer',
        'answered_at' => 'datetime',
    ];

    // ============================================
    // RELATIONS
    // ============================================

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function quizAttempt(): BelongsTo
    {
        return $this->belongsTo(QuizAttempt::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }

    // ============================================
    // MÉTHODES MÉTIER
    // ============================================

    /**
     * Soumettre une réponse avec choix multiple
     */
    public function submitAnswer(int $answerId, int $timeSpent = 0): void
    {
        $answer = Answer::findOrFail($answerId);

        $this->update([
            'answer_id' => $answerId,
            'is_correct' => $answer->is_correct,
            'points_earned' => $answer->is_correct ? $this->question->points : 0,
            'time_spent' => $timeSpent,
            'answered_at' => now(),
        ]);
    }

    /**
     * Soumettre une réponse textuelle (question ouverte)
     */
    public function submitTextAnswer(string $text, int $timeSpent = 0): void
    {
        $this->update([
            'answer_text' => $text,
            'time_spent' => $timeSpent,
            'answered_at' => now(),
        ]);
    }

    /**
     * Marquer comme correcte (correction manuelle)
     */
    public function markAsCorrect(int $points): void
    {
        $this->update([
            'is_correct' => true,
            'points_earned' => $points,
        ]);
    }

    /**
     * Marquer comme incorrecte
     */
    public function markAsIncorrect(): void
    {
        $this->update([
            'is_correct' => false,
            'points_earned' => 0,
        ]);
    }

    // ============================================
    // ACCESSORS
    // ============================================

    /**
     * Temps formaté (ex: "1m 23s")
     */
    public function getFormattedTimeAttribute(): string
    {
        if ($this->time_spent === 0) {
            return '0s';
        }

        $minutes = floor($this->time_spent / 60);
        $seconds = $this->time_spent % 60;

        return $minutes > 0
            ? "{$minutes}m {$seconds}s"
            : "{$seconds}s";
    }

    /**
     * Statut visuel (✓ ou ✗)
     */
    public function getStatusIconAttribute(): string
    {
        return $this->is_correct ? '✓' : '✗';
    }

    /**
     * Couleur du statut
     */
    public function getStatusColorAttribute(): string
    {
        return $this->is_correct ? 'green' : 'red';
    }

    /**
     * Vérifie si la réponse a été donnée
     */
    public function getIsAnsweredAttribute(): bool
    {
        return !is_null($this->answered_at);
    }

    /**
     * Retourne le type de réponse
     */
    public function getAnswerTypeAttribute(): string
    {
        if ($this->answer_id) {
            return 'choice';
        }

        if ($this->answer_text) {
            return 'text';
        }

        return 'none';
    }
}
