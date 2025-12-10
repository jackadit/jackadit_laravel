<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    // ========================================
    // 🔧 CONFIGURATION
    // ========================================

    protected $fillable = [
        'course_id',
        'section_id',
        'title',
        'slug',
        'description',
        'content',
        'order',
        'type',                  // 'video', 'text', 'quiz', 'file'
        'video_url',
        'duration_minutes',
        'file_path',
        'is_free',
        'is_published',
        'is_preview',            // ✅ Leçon visible en prévisualisation
    ];

    /**
     * ✅ MODERNE : Méthode casts() (Laravel 11+)
     */
    protected function casts(): array
    {
        return [
            'is_free' => 'boolean',
            'is_published' => 'boolean',
            'is_preview' => 'boolean',
            'duration_minutes' => 'integer',
            'order' => 'integer',
        ];
    }

    // ========================================
    // 🎯 BOOT (AUTO-GÉNÉRATION DU SLUG)
    // ========================================

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($lesson) {
            if (empty($lesson->slug)) {
                $lesson->slug = Str::slug($lesson->title);
            }
        });

        // ✅ AMÉLIORATION : Régénère aussi à l'update
        static::updating(function ($lesson) {
            if ($lesson->isDirty('title') && empty($lesson->slug)) {
                $lesson->slug = Str::slug($lesson->title);
            }
        });
    }

    // ========================================
    // 🔗 RELATIONS (AVEC TYPE HINTS)
    // ========================================

    /**
     * 📚 Cours parent
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * 📂 Section parente (optionnelle)
     */
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * ✅ Complétions (lesson_completions)
     */
    public function completions(): HasMany
    {
        return $this->hasMany(LessonCompletion::class);
    }

    /**
     * 📝 Quiz associés à cette leçon
     */
    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    // ========================================
    // 🔎 SCOPES
    // ========================================

    /**
     * ✅ Scope : Leçons publiées
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * 🆓 Scope : Leçons gratuites
     */
    public function scopeFree($query)
    {
        return $query->where('is_free', true);
    }

    /**
     * 🎬 Scope : Leçons de prévisualisation
     */
    public function scopePreview($query)
    {
        return $query->where('is_preview', true);
    }

    /**
     * 📊 Scope : Tri par ordre
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    /**
     * 🎥 Scope : Leçons vidéo
     */
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }

    /**
     * 📄 Scope : Leçons texte
     */
    public function scopeTexts($query)
    {
        return $query->where('type', 'text');
    }

    // ========================================
    // 🛠️ ACCESSORS (ATTRIBUTS CALCULÉS)
    // ========================================

    /**
     * ⏱️ Durée formatée (ex: "1h 30min" ou "45 min")
     */
    public function getDurationFormattedAttribute(): string
    {
        if (!$this->duration_minutes) {
            return '0 min';
        }

        if ($this->duration_minutes < 60) {
            return $this->duration_minutes . ' min';
        }

        $hours = floor($this->duration_minutes / 60);
        $minutes = $this->duration_minutes % 60;

        return $hours . 'h' . ($minutes > 0 ? ' ' . $minutes . 'min' : '');
    }

    /**
     * ✅ Vérifie si l'utilisateur connecté a complété cette leçon
     */
    public function getIsCompletedAttribute(): bool
    {
        if (!auth()->check()) {
            return false;
        }

        return $this->completions()
            ->where('user_id', auth()->id())
            ->where('is_completed', true)
            ->exists();
    }

    /**
     * 🎯 Icône selon le type de leçon
     */
    public function getTypeIconAttribute(): string
    {
        return match($this->type) {
            'video' => '🎥',
            'text' => '📄',
            'quiz' => '📝',
            'file' => '📎',
            default => '📚',
        };
    }

    /**
     * 🏷️ Label lisible du type
     */
    public function getTypeLabelAttribute(): string
    {
        return match($this->type) {
            'video' => 'Vidéo',
            'text' => 'Texte',
            'quiz' => 'Quiz',
            'file' => 'Fichier',
            default => 'Autre',
        };
    }

    /**
     * 📎 URL du fichier (si type = 'file')
     */
    public function getFileUrlAttribute(): ?string
    {
        if ($this->type !== 'file' || !$this->file_path) {
            return null;
        }

        return \Storage::url($this->file_path);
    }

    // ========================================
    // 🛠️ HELPERS
    // ========================================

    /**
     * 🆓 Vérifie si la leçon est gratuite
     */
    public function isFree(): bool
    {
        return $this->is_free;
    }

    /**
     * ✅ Vérifie si la leçon est publiée
     */
    public function isPublished(): bool
    {
        return $this->is_published;
    }

    /**
     * 🎬 Vérifie si la leçon est en prévisualisation
     */
    public function isPreview(): bool
    {
        return $this->is_preview;
    }

    /**
     * 🎥 Vérifie si c'est une vidéo
     */
    public function isVideo(): bool
    {
        return $this->type === 'video';
    }

    /**
     * 📄 Vérifie si c'est un texte
     */
    public function isText(): bool
    {
        return $this->type === 'text';
    }

    /**
     * 📝 Vérifie si c'est un quiz
     */
    public function isQuiz(): bool
    {
        return $this->type === 'quiz';
    }

    /**
     * ✅ Vérifie si un utilisateur a complété cette leçon
     */
    public function isCompletedBy(User $user): bool
    {
        return $this->completions()
            ->where('user_id', $user->id)
            ->where('is_completed', true)
            ->exists();
    }

    public function isCompletedByUser(?int $userId = null): bool
    {
        $user = $userId ? User::find($userId) : auth()->user();
        return $user ? $this->isCompletedBy($user) : false;
    }

    /**
     * ✅ Marque comme complétée pour l'utilisateur connecté
     */
    public function markAsCompleted(?User $user = null): void
    {
        $user = $user ?? auth()->user();

        if (!$user) {
            return;
        }

        // Vérifie si déjà complétée
        $completion = $this->completions()
            ->where('user_id', $user->id)
            ->first();

        if ($completion) {
            // Met à jour si déjà existe
            $completion->update([
                'is_completed' => true,
                'completed_at' => now(),
            ]);
        } else {
            // Crée une nouvelle completion
            $this->completions()->create([
                'user_id' => $user->id,
                'is_completed' => true,
                'completed_at' => now(),
            ]);
        }

        // 🔄 Met à jour la progression du cours
        $enrollment = Enrollment::where('user_id', $user->id)
            ->where('course_id', $this->course_id)
            ->first();

        if ($enrollment) {
            $enrollment->updateProgress();
        }
    }

    /**
     * ❌ Marque comme non complétée
     */
    public function markAsIncomplete(?User $user = null): void
    {
        $user = $user ?? auth()->user();

        if (!$user) {
            return;
        }

        $this->completions()
            ->where('user_id', $user->id)
            ->update([
                'is_completed' => false,
                'completed_at' => null,
            ]);

        // 🔄 Met à jour la progression du cours
        $enrollment = Enrollment::where('user_id', $user->id)
            ->where('course_id', $this->course_id)
            ->first();

        if ($enrollment) {
            $enrollment->updateProgress();
        }
    }

    /**
     * 📊 Taux de complétion (% d'utilisateurs ayant complété)
     */
    public function getCompletionRate(): float
    {
        $totalEnrollments = Enrollment::where('course_id', $this->course_id)->count();

        if ($totalEnrollments === 0) {
            return 0;
        }

        $completedCount = $this->completions()
            ->where('is_completed', true)
            ->count();

        return round(($completedCount / $totalEnrollments) * 100, 2);
    }
}
