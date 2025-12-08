<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enrollment extends Model
{
    use HasFactory;

    /**
     * Attributs remplissables
     */
    protected $fillable = [
        'user_id',
        'course_id',
        'progress',
        'status',
        'completed_at',
        'last_accessed_at',
    ];

    /**
     * Casts des attributs
     */
    protected $casts = [
        'progress' => 'integer',
        'completed_at' => 'datetime',
        'last_accessed_at' => 'datetime',
    ];

    /**
     * Relation : Une inscription appartient à un utilisateur
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation : Une inscription appartient à un cours
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Vérifie si le cours est complété
     */
    public function isCompleted(): bool
    {
        return $this->status === 'completed' && $this->completed_at !== null;
    }

    /**
     * Vérifie si l'inscription est active
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    /**
     * Marque le cours comme terminé
     */
    public function markAsCompleted(): void
    {
        $this->update([
            'status' => 'completed',
            'completed_at' => now(),
            'progress' => 100,
        ]);
    }

    /**
     * Met à jour la progression
     */
    public function updateProgress(int $progress): void
    {
        $this->update([
            'progress' => min(100, max(0, $progress)),
            'last_accessed_at' => now(),
        ]);

        // Si progression = 100%, marquer comme terminé
        if ($progress >= 100 && !$this->isCompleted()) {
            $this->markAsCompleted();
        }
    }

    /**
     * Met à jour la date de dernière consultation
     */
    public function touch($attribute = null)
    {
        if (!$attribute) {
            $this->last_accessed_at = now();
        }

        return parent::touch($attribute);
    }
}
