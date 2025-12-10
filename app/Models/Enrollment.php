<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    use HasFactory, SoftDeletes;

    // ========================================
    protected $fillable = [
        'user_id',
        'course_id',
        'payment_id',
        'progress',              // 0-100
        'status',                // 'active', 'completed', 'expired', 'cancelled'
        'enrolled_at',           // Date d'inscription
        'completed_at',          // Date de complétion
        'last_accessed_at',      // Dernière consultation
        'expires_at',            // Date d'expiration (optionnel)
    ];
    // 🔧 CONFIGURATION

    // ========================================

    /**
     * ✅ MODERNE : Méthode casts() (Laravel 11+)
     */
    protected function casts(): array
    {
        return [
            'progress' => 'integer',
            'enrolled_at' => 'datetime',
            'completed_at' => 'datetime',
            'last_accessed_at' => 'datetime',
            'expires_at' => 'datetime',
        ];
    }

    // ========================================
    // 🎯 BOOT (INITIALISATION AUTO)
    // ========================================

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($enrollment) {
            // Initialise les valeurs par défaut
            if (is_null($enrollment->enrolled_at)) {
                $enrollment->enrolled_at = now();
            }

            if (is_null($enrollment->status)) {
                $enrollment->status = 'active';
            }

            if (is_null($enrollment->progress)) {
                $enrollment->progress = 0;
            }

            if (is_null($enrollment->last_accessed_at)) {
                $enrollment->last_accessed_at = now();
            }
        });

        // Incrémenter le compteur du cours
        static::created(function ($enrollment) {
            $enrollment->course->incrementEnrollmentCount();
        });

        // Décrémenter le compteur du cours
        static::deleted(function ($enrollment) {
            $enrollment->course->decrementEnrollmentCount();
        });
    }

    // ========================================
    // 🔗 RELATIONS
    // ========================================

    /**
     * 👤 Utilisateur inscrit
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 📚 Cours associé
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    // ========================================
    // 🔎 SCOPES
    // ========================================

    /**
     * ✅ Scope : Inscriptions actives
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * ✅ Scope : Inscriptions complétées
     */
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    /**
     * ⏰ Scope : Inscriptions expirées
     */
    public function scopeExpired($query)
    {
        return $query->where('status', 'expired')
            ->orWhere('expires_at', '<', now());
    }

    /**
     * 📊 Scope : Inscriptions récentes (< 7 jours)
     */
    public function scopeRecent($query)
    {
        return $query->where('enrolled_at', '>=', now()->subDays(7));
    }

    /**
     * 🔥 Scope : En cours (accédées récemment)
     */
    public function scopeInProgress($query)
    {
        return $query->where('status', 'active')
            ->where('progress', '>', 0)
            ->where('progress', '<', 100);
    }

    // ========================================
    // 🛠️ HELPERS (VÉRIFICATIONS)
    // ========================================

    /**
     * ✅ Vérifie si le cours est complété
     */
    public function isCompleted(): bool
    {
        return $this->status === 'completed' && $this->completed_at !== null;
    }

    /**
     * ✅ Vérifie si l'inscription est active
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    /**
     * ⏰ Vérifie si l'inscription est expirée
     */
    public function isExpired(): bool
    {
        if ($this->status === 'expired') {
            return true;
        }

        if ($this->expires_at && $this->expires_at->isPast()) {
            $this->update(['status' => 'expired']);
            return true;
        }

        return false;
    }

    /**
     * 🚀 Vérifie si l'étudiant vient de commencer (< 10% progression)
     */
    public function isJustStarted(): bool
    {
        return $this->progress > 0 && $this->progress < 10;
    }

    /**
     * 🔥 Vérifie si l'étudiant est en cours d'apprentissage
     */
    public function isInProgress(): bool
    {
        return $this->progress > 0 && $this->progress < 100 && $this->isActive();
    }

    // ========================================
    // 🛠️ HELPERS (ACTIONS)
    // ========================================

    /**
     * ✅ Marque le cours comme terminé
     */
    public function markAsCompleted(): void
    {
        $this->update([
            'status' => 'completed',
            'completed_at' => now(),
            'progress' => 100,
            'last_accessed_at' => now(),
        ]);
    }

    /**
     * ❌ Annule l'inscription
     */
    public function cancel(): void
    {
        $this->update([
            'status' => 'cancelled',
        ]);
    }

    /**
     * 🔄 Réactive l'inscription
     */
    public function reactivate(): void
    {
        $this->update([
            'status' => 'active',
            'last_accessed_at' => now(),
        ]);
    }

    /**
     * 📊 Met à jour la progression (AUTOMATIQUE ou MANUELLE)
     *
     * Usage:
     * - $enrollment->updateProgress();        // Calcul auto basé sur lessons
     * - $enrollment->updateProgress(75);      // Manuel (pour override)
     */
    public function updateProgress(?int $manualProgress = null): void
    {
        // Si on passe un % manuellement
        if ($manualProgress !== null) {
            $progress = min(100, max(0, $manualProgress));
        } else {
            // Calcul automatique basé sur les leçons complétées
            $progress = $this->calculateProgress();
        }

        $this->update([
            'progress' => $progress,
            'last_accessed_at' => now(),
        ]);

        // Si 100%, marquer comme complété
        if ($progress >= 100 && !$this->isCompleted()) {
            $this->markAsCompleted();
        }
    }

    /**
     * 🧮 Calcule la progression réelle basée sur les leçons complétées
     */
    protected function calculateProgress(): int
    {
        $totalLessons = $this->course->lessons()->count();

        if ($totalLessons === 0) {
            return 0;
        }

        $completedLessons = LessonCompletion::where('user_id', $this->user_id)
            ->whereIn('lesson_id', $this->course->lessons()->pluck('id'))
            ->where('is_completed', true)
            ->count();

        return (int) round(($completedLessons / $totalLessons) * 100);
    }

    /**
     * 📅 Met à jour la date de dernière consultation
     */
    public function touch($attribute = null)
    {
        if (!$attribute) {
            $this->last_accessed_at = now();
        }

        return parent::touch($attribute);
    }

    /**
     * 📊 Retourne les stats de progression
     */
    public function getProgressStats(): array
    {
        $totalLessons = $this->course->lessons()->count();
        $completedLessons = LessonCompletion::where('user_id', $this->user_id)
            ->whereIn('lesson_id', $this->course->lessons()->pluck('id'))
            ->where('is_completed', true)
            ->count();

        return [
            'total_lessons' => $totalLessons,
            'completed_lessons' => $completedLessons,
            'remaining_lessons' => $totalLessons - $completedLessons,
            'progress_percentage' => $this->progress,
            'is_completed' => $this->isCompleted(),
            'days_enrolled' => $this->enrolled_at->diffInDays(now()),
            'last_activity' => $this->last_accessed_at->diffForHumans(),
        ];
    }

    // ========================================
    // 🛠️ ACCESSORS
    // ========================================

    /**
     * 📊 Badge de statut (pour l'affichage)
     */
    public function getStatusBadgeAttribute(): string
    {
        return match($this->status) {
            'active' => '🟢 Actif',
            'completed' => '✅ Terminé',
            'expired' => '⏰ Expiré',
            'cancelled' => '❌ Annulé',
            default => '❓ Inconnu',
        };
    }

    /**
     * 🎯 Niveau de progression (visuel)
     */
    public function getProgressLevelAttribute(): string
    {
        return match(true) {
            $this->progress === 0 => 'Pas commencé',
            $this->progress < 25 => 'Débutant',
            $this->progress < 50 => 'En progression',
            $this->progress < 75 => 'Avancé',
            $this->progress < 100 => 'Presque terminé',
            default => 'Complété',
        };
    }

    /**
     * ⏱️ Temps restant estimé (en jours)
     */
    public function getEstimatedDaysLeftAttribute(): ?int
    {
        if ($this->progress === 0 || $this->isCompleted()) {
            return null;
        }

        $daysEnrolled = $this->enrolled_at->diffInDays(now());
        $averageProgressPerDay = $this->progress / max($daysEnrolled, 1);
        $remainingProgress = 100 - $this->progress;

        return (int) ceil($remainingProgress / max($averageProgressPerDay, 1));
    }
}
