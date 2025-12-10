<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;

    // ========================================
    // 🔧 CONFIGURATION
    // ========================================

    protected $fillable = [
        'course_id',
        'lesson_id',
        'title',
        'description',
        'duration_minutes',
        'passing_score',
        'max_attempts',
        'randomize_questions',     // ⚠️ NORMALISÉ (au lieu de shuffle_questions)
        'show_correct_answers',
        'is_published',
        'attempts_count',    // ← AJOUTE
        'passed_count',      // ← AJOUTE
        'average_score',     // ← AJOUTE
    ];

    protected function casts(): array
    {
        return [
            'duration_minutes' => 'integer',
            'passing_score' => 'integer',
            'max_attempts' => 'integer',
            'randomize_questions' => 'boolean',
            'show_correct_answers' => 'boolean',
            'is_published' => 'boolean',
        ];
    }

    // ========================================
    // 🔗 RELATIONS
    // ========================================

    /**
     * Relation directe vers le cours (quiz de cours)
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    /**
     * ⭐ CORRECTION : Récupère le cours (direct ou via leçon)
     *
     * ⚠️ NE PAS NOMMER COMME LA RELATION !
     * Sinon conflit avec $this->course
     */
    public function getOwnerCourseAttribute(): ?Course
    {
        // Si quiz de cours → relation directe
        if ($this->course_id) {
            return $this->course;
        }

        // Sinon → via la leçon
        return $this->lesson?->course;
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class)->orderBy('order');
    }

    public function attempts(): HasMany
    {
        return $this->hasMany(QuizAttempt::class);
    }

    // ========================================
    // 🔍 SCOPES
    // ========================================

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOfCourse($query, int $courseId)
    {
        return $query->where('course_id', $courseId);
    }

    public function scopeOfLesson($query, int $lessonId)
    {
        return $query->where('lesson_id', $lessonId);
    }

    public function scopeWithQuestionsCount($query)
    {
        return $query->withCount('questions');
    }

    /**
     * ⭐ Récupère TOUS les quiz d'un cours (direct + via leçons)
     */
    public function scopeForCourse($query, int $courseId)
    {
        return $query->where(function($q) use ($courseId) {
            $q->where('course_id', $courseId)
                ->orWhereHas('lesson', function($q2) use ($courseId) {
                    $q2->where('course_id', $courseId);
                });
        });
    }

    // ========================================
    // 📊 ACCESSORS
    // ========================================

    public function getDurationFormattedAttribute(): string
    {
        if (!$this->duration_minutes) {
            return 'Illimité';
        }

        if ($this->duration_minutes < 60) {
            return "{$this->duration_minutes} min";
        }

        $hours = floor($this->duration_minutes / 60);
        $minutes = $this->duration_minutes % 60;

        return $minutes > 0
            ? "{$hours}h {$minutes}min"
            : "{$hours}h";
    }

    public function getIsTimeLimitedAttribute(): bool
    {
        return $this->duration_minutes !== null && $this->duration_minutes > 0;
    }

    public function getTypeAttribute(): string
    {
        if ($this->course_id) return 'course';
        if ($this->lesson_id) return 'lesson';
        return 'unknown';
    }

    public function getTypeLabelAttribute(): string
    {
        return match($this->type) {
            'course' => '📚 Évaluation de cours',
            'lesson' => '📖 Quiz de leçon',
            default => 'Quiz'
        };
    }

    public function getTotalQuestionsAttribute(): int
    {
        return $this->questions()->count();
    }

    public function getAttemptsLeftAttribute(): ?int
    {
        if (!auth()->check() || !$this->max_attempts) return null;

        $usedAttempts = $this->attempts()
            ->where('user_id', auth()->id())
            ->count();

        return max(0, $this->max_attempts - $usedAttempts);
    }

    public function getBestScoreAttribute(): ?int
    {
        if (!auth()->check()) return null;

        return $this->attempts()
            ->where('user_id', auth()->id())
            ->where('is_completed', true)
            ->max('score');
    }

    public function getIsPassedAttribute(): bool
    {
        return $this->best_score >= $this->passing_score;
    }

    public function getAverageScoreAttribute(): float
    {
        return $this->attempts()
            ->where('is_completed', true)
            ->avg('score') ?? 0;
    }

    // ========================================
    // 🛠️ HELPERS
    // ========================================

    /**
     * ⭐ GARDE : Somme des points du quiz
     */
    public function totalPoints(): int
    {
        return $this->questions()->sum('points');
    }

    /**
     * ⭐ GARDE : Vérifie si un utilisateur peut tenter le quiz
     */
    public function canUserAttempt(int $userId): bool
    {
        if (!$this->is_published) {
            return false;
        }

        if ($this->max_attempts === null || $this->max_attempts === 0) {
            return true;
        }

        $attemptsCount = $this->attempts()
            ->where('user_id', $userId)
            ->count();

        return $attemptsCount < $this->max_attempts;
    }

    /**
     * Meilleur score d'un utilisateur
     */
    public function bestScore(int $userId): int
    {
        return $this->attempts()
            ->where('user_id', $userId)
            ->max('score') ?? 0;
    }

    /**
     * ⭐ GARDE : Tentatives restantes
     */
    public function getRemainingAttempts(int $userId): int
    {
        if ($this->max_attempts === null || $this->max_attempts === 0) {
            return PHP_INT_MAX;
        }

        $attempts = $this->attempts()
            ->where('user_id', $userId)
            ->count();

        return max(0, $this->max_attempts - $attempts);
    }

    /**
     * ⭐ GARDE : Dernière tentative
     */
    public function lastAttempt(int $userId): ?QuizAttempt
    {
        return $this->attempts()
            ->where('user_id', $userId)
            ->latest()
            ->first();
    }

    /**
     * ⭐ GARDE : L'utilisateur a-t-il réussi ?
     */
    public function hasPassed(int $userId): bool
    {
        return $this->attempts()
            ->where('user_id', $userId)
            ->where('passed', true)
            ->exists();
    }

    /**
     * Récupère les questions pour une tentative
     */
    public function getQuestionsForAttempt()
    {
        $query = $this->questions()->with('answers');

        if ($this->randomize_questions) {
            $query->inRandomOrder();
        }

        return $query->get();
    }

    /**
     * ⭐ AJOUTE : Calcule automatiquement le score
     */
    public function calculateScore(array $userAnswers): array
    {
        $questions = $this->questions()->with('answers')->get();
        $totalQuestions = $questions->count();

        if ($totalQuestions === 0) {
            return [
                'score' => 0,
                'correct_answers' => 0,
                'total_questions' => 0,
                'percentage' => 0,
                'passed' => false,
            ];
        }

        $correctAnswers = 0;
        $totalPoints = 0;
        $earnedPoints = 0;

        foreach ($questions as $question) {
            $totalPoints += $question->points;

            $correctAnswerIds = $question->answers()
                ->where('is_correct', true)
                ->pluck('id')
                ->sort()
                ->values()
                ->toArray();

            $userAnswerIds = collect($userAnswers[$question->id] ?? [])
                ->sort()
                ->values()
                ->toArray();

            if ($correctAnswerIds === $userAnswerIds) {
                $correctAnswers++;
                $earnedPoints += $question->points;
            }
        }

        $percentage = $totalPoints > 0
            ? round(($earnedPoints / $totalPoints) * 100, 2)
            : 0;

        return [
            'score' => $percentage,
            'correct_answers' => $correctAnswers,
            'total_questions' => $totalQuestions,
            'total_points' => $totalPoints,
            'earned_points' => $earnedPoints,
            'percentage' => $percentage,
            'passed' => $percentage >= $this->passing_score,
        ];
    }
}
