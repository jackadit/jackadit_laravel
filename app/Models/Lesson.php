<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'slug',
        'description',
        'content_type',      // text, video, pdf, quiz
        'content',           // Contenu texte/HTML
        'video_url',         // URL Vimeo/YouTube
        'document_path',     // Chemin vers PDF
        'duration',          // En minutes
        'order',             // Position dans le cours
        'is_free',           // Aperçu gratuit
        'is_published',      // Publié ou brouillon
    ];

    protected $casts = [
        'is_free' => 'boolean',
        'is_published' => 'boolean',
        'duration' => 'integer',
        'order' => 'integer',
    ];

    // ============================================
    // AUTO-GÉNÉRATION (slug + order)
    // ============================================
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($lesson) {
            // 1. Génération du slug
            if (empty($lesson->slug)) {
                $lesson->slug = Str::slug($lesson->title);
            }

            // 2. Auto-incrémentation de l'ordre
            if ($lesson->order === 0 || $lesson->order === null) {
                $maxOrder = static::where('course_id', $lesson->course_id)->max('order');
                $lesson->order = $maxOrder ? $maxOrder + 1 : 1;
            }
        });

        static::updating(function ($lesson) {
            // Mise à jour du slug si le titre change
            if ($lesson->isDirty('title')) {
                $lesson->slug = Str::slug($lesson->title);
            }
        });
    }

    // ============================================
    // RELATIONS
    // ============================================

    /**
     * Relation : Une leçon appartient à un cours
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Relation : Une leçon peut avoir plusieurs quiz
     */
    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    // ============================================
    // SCOPES
    // ============================================

    /**
     * Scope : Leçons publiées
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope : Leçons gratuites
     */
    public function scopeFree($query)
    {
        return $query->where('is_free', true);
    }

    /**
     * Scope : Ordonner par ordre
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    /**
     * Scope : Leçons d'un cours spécifique
     */
    public function scopeOfCourse($query, $courseId)
    {
        return $query->where('course_id', $courseId);
    }

    /**
     * Scope : Leçons par type de contenu
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('content_type', $type);
    }

    // ============================================
    // ACCESSORS
    // ============================================

    /**
     * Accessor : Durée formatée (ex: "1h 30min")
     */
    public function getFormattedDurationAttribute()
    {
        if (!$this->duration) {
            return 'N/A';
        }

        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;

        if ($hours > 0) {
            return $hours . 'h ' . $minutes . 'min';
        }

        return $minutes . 'min';
    }

    /**
     * ✅ Accessor : Icône du type de contenu
     */
    public function getContentIconAttribute()
    {
        return match($this->content_type) {
            'video' => '🎥',
            'text' => '📝',
            'pdf' => '📄',
            'quiz' => '📝',
            default => '📖',
        };
    }

    /**
     * ✅ Accessor : Label lisible du type
     */
    public function getContentTypeLabelAttribute()
    {
        return match($this->content_type) {
            'video' => 'Vidéo',
            'text' => 'Texte',
            'pdf' => 'Document PDF',
            'quiz' => 'Quiz',
            default => 'Contenu',
        };
    }

    // ============================================
    // HELPER METHODS
    // ============================================

    /**
     * Vérifie si la leçon a au moins un quiz
     */
    public function hasQuiz(): bool
    {
        return $this->quizzes()->exists();
    }

    /**
     * Récupère le quiz principal de la leçon (le premier)
     */
    public function mainQuiz(): ?Quiz
    {
        return $this->quizzes()->first();
    }

    /**
     * ✨ NOUVEAU : Navigation - Leçon précédente
     */
    public function previous(): ?Lesson
    {
        return static::where('course_id', $this->course_id)
            ->where('order', '<', $this->order)
            ->orderBy('order', 'desc')
            ->first();
    }

    /**
     * ✨ NOUVEAU : Navigation - Leçon suivante
     */
    public function next(): ?Lesson
    {
        return static::where('course_id', $this->course_id)
            ->where('order', '>', $this->order)
            ->orderBy('order', 'asc')
            ->first();
    }

    /**
     * ✨ NOUVEAU : Vérifie si c'est la première leçon du cours
     */
    public function isFirst(): bool
    {
        return $this->order === 1;
    }

    /**
     * ✨ NOUVEAU : Vérifie si c'est la dernière leçon du cours
     */
    public function isLast(): bool
    {
        $maxOrder = static::where('course_id', $this->course_id)->max('order');
        return $this->order === $maxOrder;
    }

    /**
     * URL vers la page de la leçon
     */
    public function url(): string
    {
        return route('courses.lessons.show', [
            'course' => $this->course_id,
            'lesson' => $this->id
        ]);
    }

    /**
     * Vérifie si la leçon est accessible (publiée OU gratuite)
     */
    public function isAccessible(): bool
    {
        return $this->is_published || $this->is_free;
    }
}
