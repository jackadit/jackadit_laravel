<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'difficulty_level',  // ✅ Renommé de 'level'
        'price',
        'is_published',
        'instructor_id',     // ✅ Renommé de 'instructor_id'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_published' => 'boolean',
    ];

    // ============================================
    // AUTO-GÉNÉRATION DU SLUG
    // ============================================
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });

        // ✨ BONUS : Mise à jour du slug si le titre change
        static::updating(function ($course) {
            if ($course->isDirty('title') && empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });
    }

    // ============================================
    // RELATIONS
    // ============================================

    /**
     * Relation : Formateur propriétaire du cours
     * ✅ Renommé de instructor() → instructor()
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    /**
     * Relation : Un cours a plusieurs leçons (ordonnées)
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class)->orderBy('order');
    }

    /**
     * Relation : Tous les quiz du cours (via les leçons)
     * ✨ NOUVELLE RELATION
     */
    public function quizzes(): HasManyThrough
    {
        return $this->hasManyThrough(Quiz::class, Lesson::class);
    }

    // ============================================
    // ACCESSORS
    // ============================================

    /**
     * Accessor : Nombre de leçons
     */
    public function getLessonsCountAttribute()
    {
        return $this->lessons()->count();
    }

    /**
     * Accessor : Durée totale du cours
     */
    public function getTotalDurationAttribute()
    {
        $totalMinutes = $this->lessons()->sum('duration');

        if (!$totalMinutes) {
            return 'N/A';
        }

        $hours = floor($totalMinutes / 60);
        $minutes = $totalMinutes % 60;

        if ($hours > 0) {
            return $hours . 'h ' . $minutes . 'min';
        }

        return $minutes . 'min';
    }

    // ============================================
    // SCOPES
    // ============================================

    /**
     * Scope : Uniquement les cours publiés
     *
     * Utilisation : Course::published()->get()
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope : Filtrer par formateur
     *
     * Utilisation : Course::byInstructor(5)->get()
     */
    public function scopeByInstructor($query, int $instructorId)
    {
        return $query->where('instructor_id', $instructorId);
    }

    // ============================================
    // HELPER METHODS
    // ============================================

    /**
     * Nombre total de quiz dans le cours
     */
    public function totalQuizzes(): int
    {
        return $this->quizzes()->count();
    }

    /**
     * Vérifie si le cours appartient à un utilisateur
     *
     * @param User $user
     * @return bool
     */
    public function isOwnedBy(User $user): bool
    {
        return $this->instructor_id === $user->id;
    }

    /**
     * URL vers la page publique du cours
     *
     * @return string
     */
    public function url(): string
    {
        return route('courses.show', $this);
    }

    /**
     * Vérifier si le cours est gratuit
     *
     * @return bool
     */
    public function isFree(): bool
    {
        return $this->price == 0;
    }

    /**
     * Prix formaté
     *
     * @return string
     */
    public function formattedPrice(): string
    {
        if ($this->isFree()) {
            return 'Gratuit';
        }

        return number_format($this->price, 2, ',', ' ') . ' €';
    }
}
