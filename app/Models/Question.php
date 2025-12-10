<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model
{
    use HasFactory;

    // ============================================
    // CONSTANTES - TYPES DE QUESTIONS
    // ============================================

    const TYPE_SINGLE_CHOICE = 'single';      // QCM (1 réponse)
    const TYPE_MULTIPLE_CHOICE = 'multiple';  // QCM (plusieurs réponses)
    const TYPE_TRUE_FALSE = 'true_false';            // Vrai/Faux

    // ============================================
    // CONSTANTES - NIVEAUX DE DIFFICULTÉ
    // ============================================

    const DIFFICULTY_EASY = 'easy';
    const DIFFICULTY_MEDIUM = 'medium';
    const DIFFICULTY_HARD = 'hard';

    // ============================================
    // ATTRIBUTS
    // ============================================

    protected $fillable = [
        'quiz_id',
        'question_text',
        'type',
        'difficulty',
        'points',
        'time_limit',
        'explanation',
        'order',
        'show_correct_answers',
        'is_required',
    ];

    protected $casts = [
        'points' => 'integer',
        'order' => 'integer',
        'time_limit' => 'integer',
        'show_correct_answers' => 'boolean',
        'is_required' => 'boolean',
    ];

    protected $attributes = [
        'difficulty' => self::DIFFICULTY_MEDIUM,
        'is_required' => true,
    ];

    // ============================================
    // RELATIONS
    // ============================================

    /**
     * Une question appartient à un quiz
     */
    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    /**
     * Une question a plusieurs réponses possibles
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class)->orderBy('order');
    }

    /**
     * Relation vers les réponses correctes uniquement
     */
    public function correctAnswers(): HasMany
    {
        return $this->hasMany(Answer::class)->where('is_correct', true);
    }

    /**
     * Première réponse correcte (pour single_choice / true_false)
     */
    public function correctAnswer(): HasOne
    {
        return $this->hasOne(Answer::class)->where('is_correct', true);
    }

    /**
     * Relation vers les réponses données par les utilisateurs
     */
    public function userAnswers(): HasMany
    {
        return $this->hasMany(QuizAnswer::class);
    }

    // ============================================
    // SCOPES
    // ============================================

    /**
     * Questions d'un quiz donné
     */
    public function scopeOfQuiz($query, int $quizId)
    {
        return $query->where('quiz_id', $quizId);
    }

    /**
     * Questions triées par ordre
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    /**
     * Questions avec leurs bonnes réponses uniquement
     */
    public function scopeWithCorrectAnswers($query)
    {
        return $query->with('correctAnswers');
    }

    /**
     * Filtrer par type de question
     */
    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Filtrer par difficulté
     */
    public function scopeOfDifficulty($query, string $difficulty)
    {
        return $query->where('difficulty', $difficulty);
    }

    /**
     * Questions obligatoires uniquement
     */
    public function scopeRequired($query)
    {
        return $query->where('is_required', true);
    }

    /**
     * Questions avec temps limite
     */
    public function scopeTimeLimited($query)
    {
        return $query->whereNotNull('time_limit')->where('time_limit', '>', 0);
    }

    // ============================================
    // ACCESSORS
    // ============================================

    /**
     * Label du type de question
     */
    public function getTypeLabelAttribute(): string
    {
        return match($this->type) {
            self::TYPE_SINGLE_CHOICE => 'Choix unique',
            self::TYPE_MULTIPLE_CHOICE => 'Choix multiples',
            self::TYPE_TRUE_FALSE => 'Vrai/Faux',
            default => 'Type inconnu',
        };
    }

    /**
     * Points formatés
     */
    public function getFormattedPointsAttribute(): string
    {
        return $this->points . ($this->points > 1 ? ' points' : ' point');
    }

    /**
     * Texte court (max 100 caractères)
     */
    public function getShortTextAttribute(): string
    {
        return strlen($this->question_text) > 100
            ? substr($this->question_text, 0, 97) . '...'
            : $this->question_text;
    }

    /**
     * Badge de difficulté avec emoji
     */
    public function getDifficultyBadgeAttribute(): string
    {
        return match($this->difficulty ?? 'medium') {
            'easy' => '🟢 Facile',
            'medium' => '🟡 Moyen',
            'hard' => '🔴 Difficile',
            default => '⚪ Non défini',
        };
    }

    /**
     * Label de difficulté simple
     */
    public function getDifficultyLabelAttribute(): string
    {
        return match($this->difficulty ?? 'medium') {
            'easy' => 'Facile',
            'medium' => 'Moyen',
            'hard' => 'Difficile',
            default => 'Non défini',
        };
    }

    /**
     * Temps limite formaté
     */
    public function getFormattedTimeLimitAttribute(): string
    {
        if (!$this->time_limit) {
            return 'Illimité';
        }

        $minutes = floor($this->time_limit / 60);
        $seconds = $this->time_limit % 60;

        if ($minutes > 0) {
            return $seconds > 0
                ? "{$minutes}m {$seconds}s"
                : "{$minutes} min";
        }

        return "{$seconds}s";
    }

    /**
     * Question a un temps limite ?
     */
    public function getHasTimeLimitAttribute(): bool
    {
        return $this->time_limit !== null && $this->time_limit > 0;
    }

    // ============================================
    // MÉTHODES MÉTIER - VALIDATION
    // ============================================

    /**
     * Vérifier si une réponse est correcte (ID)
     */
    public function isCorrectAnswerId(int $answerId): bool
    {
        return $this->correctAnswers()->where('id', $answerId)->exists();
    }

    /**
     * Récupérer les IDs des bonnes réponses
     */
    public function getCorrectAnswerIds(): array
    {
        return $this->correctAnswers()->pluck('id')->toArray();
    }

    /**
     * Valider une réponse utilisateur
     */
    public function validateUserAnswer($userAnswer): bool
    {
        return match($this->type) {
            // Choix unique et Vrai/Faux
            self::TYPE_SINGLE_CHOICE,
            self::TYPE_TRUE_FALSE => $this->isCorrectAnswerId((int)$userAnswer),

            // QCM à choix multiples
            self::TYPE_MULTIPLE_CHOICE => $this->validateMultipleChoice((array)$userAnswer),

            default => false,
        };
    }

    /**
     * Valider les choix multiples
     */
    private function validateMultipleChoice(array $userAnswerIds): bool
    {
        $correctIds = $this->getCorrectAnswerIds();

        sort($userAnswerIds);
        sort($correctIds);

        return $userAnswerIds === $correctIds;
    }

    /**
     * Valider une réponse courte
     */
    private function validateShortAnswer(string $userAnswer): bool
    {
        $correctTexts = $this->correctAnswers()
            ->pluck('answer_text')
            ->map(fn($text) => strtolower(trim($text)))
            ->toArray();

        $userAnswerNormalized = strtolower(trim($userAnswer));

        return in_array($userAnswerNormalized, $correctTexts);
    }

    /**
     * Calculer les points obtenus pour une réponse utilisateur
     */
    public function calculatePoints($userAnswer): int
    {
        if ($this->validateUserAnswer($userAnswer)) {
            return $this->points;
        }

        // Points partiels pour choix multiples
        if ($this->type === self::TYPE_MULTIPLE_CHOICE && is_array($userAnswer)) {
            return $this->calculatePartialPoints($userAnswer);
        }

        return 0;
    }

    /**
     * Calculer les points partiels (choix multiples)
     */
    private function calculatePartialPoints(array $userAnswerIds): int
    {
        $correctIds = $this->getCorrectAnswerIds();
        $correctCount = count(array_intersect($userAnswerIds, $correctIds));
        $wrongCount = count(array_diff($userAnswerIds, $correctIds));

        // Formule : (bonnes réponses - mauvaises réponses) / total de bonnes * points
        $ratio = max(0, ($correctCount - $wrongCount) / count($correctIds));

        return (int) round($ratio * $this->points);
    }

    // ============================================
    // MÉTHODES MÉTIER - GESTION
    // ============================================

    /**
     * Ajouter une réponse avec ordre automatique
     */
    public function addAnswer(array $data): Answer
    {
        if (!isset($data['order'])) {
            $data['order'] = $this->answers()->max('order') + 1;
        }
        return $this->answers()->create($data);
    }

    /**
     * Statistiques de la question
     */
    public function getStats(): array
    {
        $total = $this->userAnswers()->count();
        $correct = $this->userAnswers()->where('is_correct', true)->count();

        return [
            'total_attempts' => $total,
            'correct_answers' => $correct,
            'incorrect_answers' => $total - $correct,
            'success_rate' => $total > 0 ? round(($correct / $total) * 100, 2) : 0,
            'avg_time_spent' => $total > 0
                ? round($this->userAnswers()->avg('time_spent'), 2)
                : 0,
        ];
    }

    /**
     * Taux de réussite
     */
    public function getSuccessRate(): float
    {
        return $this->getStats()['success_rate'];
    }

    /**
     * Réordonner les réponses
     */
    public function reorderAnswers(array $answerIds): void
    {
        foreach ($answerIds as $order => $answerId) {
            $this->answers()
                ->where('id', $answerId)
                ->update(['order' => $order + 1]);
        }
    }

    // ============================================
    // MÉTHODES STATIQUES
    // ============================================

    /**
     * Types de questions disponibles
     */
    public static function getAvailableTypes(): array
    {
        return [
            self::TYPE_SINGLE_CHOICE => 'Choix unique',
            self::TYPE_MULTIPLE_CHOICE => 'Choix multiples',
            self::TYPE_TRUE_FALSE => 'Vrai/Faux',
        ];
    }

    /**
     * Difficultés disponibles
     */
    public static function getAvailableDifficulties(): array
    {
        return [
            self::DIFFICULTY_EASY => 'Facile',
            self::DIFFICULTY_MEDIUM => 'Moyen',
            self::DIFFICULTY_HARD => 'Difficile',
        ];
    }
}
