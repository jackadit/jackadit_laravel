<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Answer extends Model
{
    use HasFactory;

    // ============================================
    // CONFIGURATION
    // ============================================

    protected $fillable = [
        'question_id',
        'answer_text',
        'is_correct',
        'order',
        'explanation', // ⬅️ AJOUT : Explication de la réponse
    ];

    protected $casts = [
        'is_correct' => 'boolean',
        'order' => 'integer',
    ];

    protected $appends = [
        'short_text',
        'status_icon',
        'status_label',
    ];

    // ============================================
    // RELATIONS
    // ============================================

    /**
     * Relation vers Question
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * Relation vers UserAnswer (réponses des utilisateurs)
     */
    public function userAnswers(): HasMany
    {
        return $this->hasMany(UserAnswer::class);
    }

    // ============================================
    // QUERY SCOPES
    // ============================================

    /**
     * Filtre : Réponses d'une question spécifique
     */
    public function scopeOfQuestion(Builder $query, int $questionId): Builder
    {
        return $query->where('question_id', $questionId);
    }

    /**
     * Filtre : Seulement les bonnes réponses
     */
    public function scopeCorrect(Builder $query): Builder
    {
        return $query->where('is_correct', true);
    }

    /**
     * Filtre : Seulement les mauvaises réponses
     */
    public function scopeIncorrect(Builder $query): Builder
    {
        return $query->where('is_correct', false);
    }

    /**
     * Tri : Par ordre d'affichage
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order');
    }

    /**
     * Tri : Aléatoire (pour mélanger les réponses)
     */
    public function scopeRandomOrder(Builder $query): Builder
    {
        return $query->inRandomOrder();
    }

    /**
     * Avec statistiques d'utilisation
     */
    public function scopeWithStats(Builder $query): Builder
    {
        return $query->withCount('userAnswers');
    }

    // ============================================
    // ACCESSORS (Attributs calculés)
    // ============================================

    /**
     * Texte court (pour listes)
     */
    public function getShortTextAttribute(): string
    {
        return Str::limit($this->answer_text, 50);
    }

    /**
     * Icône de statut
     */
    public function getStatusIconAttribute(): string
    {
        return $this->is_correct ? '✅' : '❌';
    }

    /**
     * Label de statut
     */
    public function getStatusLabelAttribute(): string
    {
        return $this->is_correct ? 'Correcte' : 'Incorrecte';
    }

    /**
     * Classe CSS selon le statut
     */
    public function getStatusClassAttribute(): string
    {
        return $this->is_correct
            ? 'bg-green-100 text-green-800'
            : 'bg-red-100 text-red-800';
    }

    // ============================================
    // HELPERS MÉTIER
    // ============================================

    /**
     * Vérifie si c'est la bonne réponse
     */
    public function isCorrect(): bool
    {
        return $this->is_correct;
    }

    /**
     * Vérifie si c'est une mauvaise réponse
     */
    public function isIncorrect(): bool
    {
        return !$this->is_correct;
    }

    /**
     * Vérifie si cette réponse a été choisie par un utilisateur
     *
     * @param int $userId
     * @param int|null $quizAttemptId (optionnel)
     * @return bool
     */
    public function isChosenBy(int $userId, ?int $quizAttemptId = null): bool
    {
        $query = UserQuizAnswer::where('answer_id', $this->id)
            ->where('user_id', $userId);

        if ($quizAttemptId) {
            $query->where('quiz_attempt_id', $quizAttemptId);
        }

        return $query->exists();
    }


    /**
     * Nombre de fois que cette réponse a été choisie
     */
    public function timesChosen(): int
    {
        return $this->userAnswers()->count();
    }

    /**
     * Taux de sélection (en %)
     */
    public function selectionRate(): float
    {
        $totalAnswers = $this->question->userAnswers()->count();

        if ($totalAnswers === 0) {
            return 0;
        }

        return round(($this->timesChosen() / $totalAnswers) * 100, 2);
    }

    /**
     * Taux de réussite des utilisateurs ayant choisi cette réponse
     * (utile pour détecter les réponses pièges)
     */
    public function successRate(): float
    {
        $attempts = $this->userAnswers()
            ->with('quizAttempt')
            ->get()
            ->pluck('quizAttempt')
            ->filter();

        if ($attempts->isEmpty()) {
            return 0;
        }

        $passed = $attempts->where('passed', true)->count();

        return round(($passed / $attempts->count()) * 100, 2);
    }

    /**
     * Statistiques complètes de cette réponse
     */
    public function getStats(): array
    {
        return [
            'times_chosen' => $this->timesChosen(),
            'selection_rate' => $this->selectionRate(),
            'success_rate' => $this->successRate(),
            'is_correct' => $this->is_correct,
        ];
    }

    // ============================================
    // VALIDATION
    // ============================================

    /**
     * Vérifie si le texte de la réponse est valide
     */
    public function hasValidText(): bool
    {
        return !empty(trim($this->answer_text));
    }

    /**
     * Vérifie si la réponse est complète
     */
    public function isComplete(): bool
    {
        return $this->hasValidText() && isset($this->is_correct);
    }

    // ============================================
    // ÉVÉNEMENTS (OPTIONNEL)
    // ============================================

    protected static function boot()
    {
        parent::boot();

        // Auto-ordre : si pas défini, prend le suivant
        static::creating(function ($answer) {
            if (is_null($answer->order)) {
                $maxOrder = static::where('question_id', $answer->question_id)
                    ->max('order');
                $answer->order = $maxOrder ? $maxOrder + 1 : 1;
            }
        });
    }
}
