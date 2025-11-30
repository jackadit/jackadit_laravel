<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'slug',
        'description',
        'content_type',      // ⭐ AJOUTÉ
        'content',
        'video_url',
        'document_path',
        'duration',
        'order',
        'is_free',
        'is_published',
    ];

    protected $casts = [
        'is_free' => 'boolean',
        'is_published' => 'boolean',
        'duration' => 'integer',
        'order' => 'integer',
    ];

    // ⭐ Amélioré : slug + order automatique
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($lesson) {
            // Génération du slug
            if (empty($lesson->slug)) {
                $lesson->slug = Str::slug($lesson->title);
            }

            // Auto-incrémentation de l'ordre
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

    /**
     * Relation : Une leçon appartient à un cours
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

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
     * ⭐ NOUVEAU : Scope : Leçons d'un cours
     */
    public function scopeOfCourse($query, $courseId)
    {
        return $query->where('course_id', $courseId);
    }

    /**
     * ⭐ NOUVEAU : Scope : Leçons par type
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('content_type', $type);
    }

    /**
     * Accessor : Durée formatée
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
     * ⭐ NOUVEAU : Accessor : Type de contenu auto-détecté
     */
    public function getContentTypeAttribute($value)
    {
        // Si content_type existe en BDD, on le retourne
        if ($value) {
            return $value;
        }

        // Sinon, détection automatique (rétro-compatibilité)
        if (!empty($this->video_url)) {
            return 'video';
        }

        if (!empty($this->document_path)) {
            return 'pdf';
        }

        if (!empty($this->content)) {
            return 'text';
        }

        return 'text';
    }

    /**
     * ⭐ NOUVEAU : Accessor : Icône du type de contenu
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
     * ✅ UNE LEÇON PEUT AVOIR PLUSIEURS QUIZ (relation 1:N)
     */
    public function quizzes()  // ✅ PLURIEL + hasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function hasQuiz()
    {
        return $this->quiz()->exists();
    }

}
