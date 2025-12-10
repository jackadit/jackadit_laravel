<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    // ========================================
    // 🔧 CONFIGURATION
    // ========================================

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'instructor_id',
        'category_id',
        'level',
        'language',
        'price',
        'duration_minutes',
        'thumbnail',
        'video_preview',
        'status',
        'is_published',
        'is_featured',
        'enrollment_count',
        'rating',
        'reviews_count',
        'published_at',
    ];

    /**
     * ✅ MODERNE : Méthode casts() (Laravel 11+)
     */
    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'rating' => 'decimal:2',
            'duration_minutes' => 'integer',
            'enrollment_count' => 'integer',
            'reviews_count' => 'integer',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    // ========================================
    // 🎯 BOOT (AUTO-GÉNÉRATION DU SLUG)
    // ========================================

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });

        static::updating(function ($course) {
            if ($course->isDirty('title') && empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });
    }

    // ========================================
    // 🔗 RELATIONS (AVEC TYPE HINTS)
    // ========================================

    /**
     * 📂 Catégorie du cours
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * 👨‍🏫 Instructeur du cours
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    /**
     * 📚 Sections du cours
     */
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class)->ordered();
    }

    /**
     * 📖 Leçons du cours (toutes sections confondues)
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class)->ordered();
    }

    /**
     * 📝 Quiz du cours
     */
    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function allQuizzes()
    {
        return Quiz::where('course_id', $this->id)
            ->orWhereHas('lesson', function($query) {
                $query->where('course_id', $this->id);
            })
            ->get();
    }

    /**
     * 📋 Inscriptions au cours
     */
    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    /**
     * 🎓 Étudiants inscrits
     */
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'enrollments')
            ->withTimestamps()
            ->withPivot(['enrolled_at', 'progress', 'status']);
    }

    /**
     * ⭐ Avis (reviews) du cours
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    // ========================================
    // 🔎 SCOPES
    // ========================================

    /**
     * ✅ Scope : Cours publiés uniquement
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where('status', 'published');
    }

    /**
     * ⭐ Scope : Cours en vedette (featured)
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * 📂 Scope : Cours d'une catégorie
     */
    public function scopeByCategory($query, int $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    /**
     * 📊 Scope : Cours d'un niveau donné
     */
    public function scopeByLevel($query, string $level)
    {
        return $query->where('level', $level);
    }

    /**
     * 🆓 Scope : Cours gratuits
     */
    public function scopeFree($query)
    {
        return $query->where('price', 0);
    }

    /**
     * 💰 Scope : Cours payants
     */
    public function scopePaid($query)
    {
        return $query->where('price', '>', 0);
    }

    /**
     * 🔍 Scope : Recherche par titre ou description
     */
    public function scopeSearch($query, string $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('short_description', 'like', "%{$search}%");
        });
    }

    /**
     * 👨‍🏫 Scope : Cours par instructeur
     */
    public function scopeByInstructor($query, int $instructorId)
    {
        return $query->where('instructor_id', $instructorId);
    }

    // ========================================
    // 🛠️ ACCESSORS (ATTRIBUTS CALCULÉS)
    // ========================================

    /**
     * ⏱️ Durée formatée (ex: "2h 30min" ou "45 min")
     */
    public function getFormattedDurationAttribute(): string
    {
        if (!$this->duration_minutes) {
            return 'Non défini';
        }

        if ($this->duration_minutes < 60) {
            return $this->duration_minutes . ' min';
        }

        $hours = floor($this->duration_minutes / 60);
        $minutes = $this->duration_minutes % 60;

        return $hours . 'h' . ($minutes > 0 ? ' ' . $minutes . 'min' : '');
    }

    /**
     * 💰 Prix formaté (ex: "Gratuit" ou "49,99 €")
     */
    public function getFormattedPriceAttribute(): string
    {
        if ($this->price == 0) {
            return 'Gratuit';
        }

        return number_format($this->price, 2, ',', ' ') . ' €';
    }

    /**
     * 🎯 Icône selon le niveau
     */
    public function getLevelIconAttribute(): string
    {
        return match($this->level) {
            'beginner' => '🟢',
            'intermediate' => '🟡',
            'advanced' => '🔴',
            default => '📚',
        };
    }

    /**
     * 🏷️ Label lisible du niveau
     */
    public function getLevelLabelAttribute(): string
    {
        return match($this->level) {
            'beginner' => 'Débutant',
            'intermediate' => 'Intermédiaire',
            'advanced' => 'Avancé',
            default => 'Non défini',
        };
    }

    /**
     * 🏷️ Label lisible du statut
     */
    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'draft' => 'Brouillon',
            'published' => 'Publié',
            'archived' => 'Archivé',
            default => 'Inconnu',
        };
    }

    /**
     * 🖼️ URL de la miniature (avec fallback)
     */
    public function getThumbnailUrlAttribute(): string
    {
        if ($this->thumbnail) {
            return \Storage::url($this->thumbnail);
        }

        return asset('images/default-course.jpg');
    }

    /**
     * 📊 Nombre total de leçons
     */
    public function getTotalLessonsAttribute(): int
    {
        return $this->lessons()->count();
    }

    /**
     * ⭐ Note moyenne arrondie
     */
    public function getAverageRatingAttribute(): float
    {
        return round($this->rating ?? 0, 1);
    }

    /**
     * 📈 Pourcentage de complétion pour un utilisateur
     */
    public function getProgressForUser(?int $userId = null): int
    {
        $userId = $userId ?? auth()->id();

        if (!$userId) {
            return 0;
        }

        $enrollment = $this->enrollments()
            ->where('user_id', $userId)
            ->first();

        return $enrollment?->progress ?? 0;
    }

    // ========================================
    // 🛠️ HELPERS
    // ========================================

    /**
     * 🆓 Vérifier si le cours est gratuit
     */
    public function isFree(): bool
    {
        return $this->price == 0;
    }

    /**
     * ✅ Vérifier si le cours est publié
     */
    public function isPublished(): bool
    {
        return $this->is_published && $this->status === 'published';
    }

    /**
     * ⭐ Vérifier si le cours est en vedette
     */
    public function isFeatured(): bool
    {
        return $this->is_featured;
    }

    /**
     * ✅ Vérifier si un utilisateur est inscrit
     */
    public function isEnrolledBy(User $user): bool
    {
        return $this->students()->where('user_id', $user->id)->exists();
    }

    /**
     * ➕ Incrémenter le compteur d'inscriptions
     */
    public function incrementEnrollmentCount(): void
    {
        $this->increment('enrollment_count');
    }

    /**
     * ➖ Décrémenter le compteur d'inscriptions
     */
    public function decrementEnrollmentCount(): void
    {
        $this->decrement('enrollment_count');
    }

    /**
     * ⭐ Recalculer la note moyenne
     */
    public function recalculateRating(): void
    {
        $average = $this->reviews()->avg('rating');
        $count = $this->reviews()->count();

        $this->update([
            'rating' => $average,
            'reviews_count' => $count,
        ]);
    }

    /**
     * ✅ Publier le cours
     */
    public function publish(): void
    {
        $this->update([
            'is_published' => true,
            'status' => 'published',
            'published_at' => now(),
        ]);
    }

    /**
     * ❌ Dépublier le cours
     */
    public function unpublish(): void
    {
        $this->update([
            'is_published' => false,
            'status' => 'draft',
            'published_at' => null,
        ]);
    }

    /**
     * 🗄️ Archiver le cours
     */
    public function archive(): void
    {
        $this->update([
            'is_published' => false,
            'status' => 'archived',
        ]);
    }
}
