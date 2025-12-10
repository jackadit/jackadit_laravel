<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory, SoftDeletes;

    // ========================================
    // 🔧 CONFIGURATION
    // ========================================

    protected $fillable = [
        'course_id',
        'title',
        'description',
        'order',
    ];

    protected function casts(): array
    {
        return [
            'order' => 'integer',
        ];
    }

    // ========================================
    // 🔄 EVENTS
    // ========================================

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($section) {
            // ✅ SUPPRIMÉ : Génération automatique du slug

            // Auto-order : place à la fin
            if (is_null($section->order)) {
                $section->order = static::where('course_id', $section->course_id)->max('order') + 1;
            }
        });

        // ✅ SUPPRIMÉ : Mise à jour du slug lors de la modification
    }

    // ========================================
    // 🔗 RELATIONS
    // ========================================

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    // ========================================
    // 🔍 SCOPES
    // ========================================

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function scopeWithLessonsCount($query)
    {
        return $query->withCount('lessons');
    }

    public function scopeWithPublishedLessons($query)
    {
        return $query->with(['lessons' => function($q) {
            $q->published()->ordered();
        }]);
    }

    // ========================================
    // 📊 ACCESSORS
    // ========================================

    public function getTotalDurationAttribute(): int
    {
        return $this->lessons()->sum('duration_minutes');
    }

    public function getDurationFormattedAttribute(): string
    {
        $total = $this->total_duration;

        if ($total < 60) {
            return "{$total} min";
        }

        $hours = floor($total / 60);
        $minutes = $total % 60;

        return $minutes > 0
            ? "{$hours}h {$minutes}min"
            : "{$hours}h";
    }

    public function getTotalLessonsAttribute(): int
    {
        return $this->lessons()->count();
    }

    public function getPublishedLessonsCountAttribute(): int
    {
        return $this->lessons()->published()->count();
    }

    public function getCompletionRateAttribute(): float
    {
        if (!auth()->check()) return 0;

        $totalLessons = $this->total_lessons;
        if ($totalLessons === 0) return 0;

        $completedLessons = $this->lessons()
            ->whereHas('completions', function($q) {
                $q->where('user_id', auth()->id())
                    ->where('is_completed', true);
            })
            ->count();

        return round(($completedLessons / $totalLessons) * 100, 2);
    }

    public function getIsCompletedAttribute(): bool
    {
        return $this->completion_rate >= 100;
    }

    // ========================================
    // 🛠️ HELPERS
    // ========================================

    public function isCompletedBy($user): bool
    {
        $totalLessons = $this->total_lessons;
        if ($totalLessons === 0) return false;

        $completedLessons = $this->lessons()
            ->whereHas('completions', function($q) use ($user) {
                $q->where('user_id', $user->id)
                    ->where('is_completed', true);
            })
            ->count();

        return $completedLessons === $totalLessons;
    }

    public function getProgressForUser($user): array
    {
        $totalLessons = $this->total_lessons;

        if ($totalLessons === 0) {
            return [
                'total_lessons' => 0,
                'completed_lessons' => 0,
                'progress_percentage' => 0,
                'is_completed' => false,
            ];
        }

        $completedLessons = $this->lessons()
            ->whereHas('completions', function($q) use ($user) {
                $q->where('user_id', $user->id)
                    ->where('is_completed', true);
            })
            ->count();

        return [
            'total_lessons' => $totalLessons,
            'completed_lessons' => $completedLessons,
            'progress_percentage' => round(($completedLessons / $totalLessons) * 100, 2),
            'is_completed' => $completedLessons === $totalLessons,
        ];
    }
}
