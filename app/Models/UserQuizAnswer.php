<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class UserQuizAnswer extends Model
{
    use HasFactory;

    // ============================================
    // CONFIGURATION
    // ============================================

    protected $fillable = [
        'user_id',
        'quiz_attempt_id',
        'question_id',
        'answer_id',
        'is_correct',
        'points_earned',
        'time_taken',
        'user_answer_text',
    ];

    protected $casts = [
        'is_correct' => 'boolean',
        'points_earned' => 'decimal:2',
        'time_taken' => 'integer',
    ];

    protected $attributes = [
        'is_correct' => false,
        'points_earned' => 0,
    ];

    protected $appends = [
        'status_icon',
        'status_badge',
        'time_formatted',
    ];

    // ============================================
    // RELATIONS
    // ============================================

    /**
     * Utilisateur ayant répondu
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Tentative de quiz associée
     */
    public function quizAttempt(): BelongsTo
    {
        return $this->belongsTo(QuizAttempt::class);
    }

    /**
     * Question à laquelle on a répondu
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * Réponse sélectionnée
     */
    public function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }

    // ============================================
    // ACCESSORS (ATTRIBUTS CALCULÉS)
    // ============================================

    /**
     * Icône de statut
     */
    public function getStatusIconAttribute(): string
    {
        if (is_null($this->answer_id)) {
            return '⏭️'; // Pas de réponse
        }

        return $this->is_correct ? '✅' : '❌';
    }

    /**
     * Badge de statut
     */
    public function getStatusBadgeAttribute(): string
    {
        if (is_null($this->answer_id)) {
            return '⏭️ Non répondu';
        }

        return $this->is_correct ? '✅ Correct' : '❌ Incorrect';
    }

    /**
     * Temps formaté (ex: "1min 23s")
     */
    public function getTimeFormattedAttribute(): ?string
    {
        if (is_null($this->time_taken)) {
            return null;
        }

        $minutes = floor($this->time_taken / 60);
        $seconds = $this->time_taken % 60;

        if ($minutes > 0) {
            return "{$minutes}min {$seconds}s";
        }

        return "{$seconds}s";
    }

    /**
     * Pourcentage de points (par rapport au max de la question)
     */
    public function getScorePercentageAttribute(): float
    {
        if (!$this->question) {
            return 0;
        }

        $maxPoints = $this->question->points;

        if ($maxPoints == 0) {
            return 0;
        }

        return round(($this->points_earned / $maxPoints) * 100, 2);
    }

    // ============================================
    // QUERY SCOPES
    // ============================================

    /**
     * Filtre : Réponses d'un utilisateur
     */
    public function scopeOfUser(Builder $query, int $userId): Builder
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Filtre : Réponses d'une tentative
     */
    public function scopeOfAttempt(Builder $query, int $attemptId): Builder
    {
        return $query->where('quiz_attempt_id', $attemptId);
    }

    /**
     * Filtre : Réponses à une question
     */
    public function scopeOfQuestion(Builder $query, int $questionId): Builder
    {
        return $query->where('question_id', $questionId);
    }

    /**
     * Filtre : Réponses correctes uniquement
     */
    public function scopeCorrect(Builder $query): Builder
    {
        return $query->where('is_correct', true);
    }

    /**
     * Filtre : Réponses incorrectes uniquement
     */
    public function scopeIncorrect(Builder $query): Builder
    {
        return $query->where('is_correct', false);
    }

    /**
     * Filtre : Questions non répondues
     */
    public function scopeUnanswered(Builder $query): Builder
    {
        return $query->whereNull('answer_id');
    }

    /**
     * Filtre : Questions répondues
     */
    public function scopeAnswered(Builder $query): Builder
    {
        return $query->whereNotNull('answer_id');
    }

    /**
     * Tri : Par temps de réponse (rapides → lents)
     */
    public function scopeFastestFirst(Builder $query): Builder
    {
        return $query->orderBy('time_taken', 'asc');
    }

    /**
     * Tri : Par points décroissants
     */
    public function scopeBestScoreFirst(Builder $query): Builder
    {
        return $query->orderBy('points_earned', 'desc');
    }

    /**
     * Avec toutes les relations
     */
    public function scopeWithFullData(Builder $query): Builder
    {
        return $query->with([
            'user:id,name,email',
            'quizAttempt:id,quiz_id,score,passed',
            'question:id,question_text,points,difficulty',
            'answer:id,answer_text,is_correct',
        ]);
    }

    // ============================================
    // MÉTHODES MÉTIER
    // ============================================

    /**
     * Vérifie si la réponse donnée était correcte
     */
    public function check(): bool
    {
        if (is_null($this->answer_id)) {
            $this->update(['is_correct' => false]);
            return false;
        }

        $answer = $this->answer;

        if (!$answer) {
            return false;
        }

        $isCorrect = $answer->is_correct;

        $this->update([
            'is_correct' => $isCorrect,
            'points_earned' => $isCorrect ? $this->question->points : 0,
        ]);

        return $isCorrect;
    }

    /**
     * Enregistre le temps de réponse
     */
    public function recordTime(int $seconds): void
    {
        $this->update(['time_taken' => $seconds]);
    }

    /**
     * Attribue des points manuellement (pour notation manuelle)
     */
    public function assignPoints(float $points): void
    {
        $maxPoints = $this->question->points;

        $this->update([
            'points_earned' => min($points, $maxPoints),
            'is_correct' => $points > 0,
        ]);
    }

    /**
     * Vérifie si c'est une réponse rapide
     */
    public function isFastAnswer(?int $threshold = 10): bool
    {
        return $this->time_taken && $this->time_taken <= $threshold;
    }

    /**
     * Vérifie si c'est une réponse lente
     */
    public function isSlowAnswer(?int $threshold = 60): bool
    {
        return $this->time_taken && $this->time_taken >= $threshold;
    }

    /**
     * Obtenir la bonne réponse (pour affichage après correction)
     */
    public function getCorrectAnswer(): ?Answer
    {
        return $this->question
            ->answers()
            ->where('is_correct', true)
            ->first();
    }

    /**
     * Statistiques de cette réponse
     */
    public function getStats(): array
    {
        return [
            'is_correct' => $this->is_correct,
            'points_earned' => (float) $this->points_earned,
            'score_percentage' => $this->score_percentage,
            'time_taken' => $this->time_taken,
            'time_formatted' => $this->time_formatted,
            'is_fast' => $this->isFastAnswer(),
            'is_slow' => $this->isSlowAnswer(),
        ];
    }

    // ============================================
    // MÉTHODES STATIQUES (STATISTIQUES GLOBALES)
    // ============================================

    /**
     * Taux de réussite moyen pour une question
     */
    public static function successRateForQuestion(int $questionId): float
    {
        $total = static::ofQuestion($questionId)->count();

        if ($total === 0) {
            return 0;
        }

        $correct = static::ofQuestion($questionId)->correct()->count();

        return round(($correct / $total) * 100, 2);
    }

    /**
     * Temps moyen de réponse pour une question
     */
    public static function averageTimeForQuestion(int $questionId): ?float
    {
        return static::ofQuestion($questionId)
            ->whereNotNull('time_taken')
            ->avg('time_taken');
    }

    /**
     * Questions les plus difficiles (taux d'échec le plus élevé)
     */
    public static function hardestQuestions(int $limit = 10): array
    {
        return DB::table('user_quiz_answers')
            ->select('question_id', DB::raw('COUNT(*) as total'), DB::raw('SUM(CASE WHEN is_correct = 0 THEN 1 ELSE 0 END) as failures'))
            ->groupBy('question_id')
            ->orderByDesc(DB::raw('failures / total'))
            ->limit($limit)
            ->get()
            ->toArray();
    }

    // ============================================
    // ÉVÉNEMENTS
    // ============================================

    protected static function boot()
    {
        parent::boot();

        // Après création : vérifier automatiquement si correct
        static::created(function ($userAnswer) {
            if (!is_null($userAnswer->answer_id) && is_null($userAnswer->is_correct)) {
                $userAnswer->check();
            }
        });
    }
}
