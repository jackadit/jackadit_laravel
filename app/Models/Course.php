<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes; // ✅ AJOUT
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory, SoftDeletes; // ✅ AJOUT

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'difficulty_level', // ✅ Renommer colonne BDD pour correspondre
        'price',
        'duration_minutes', // ✅ NOUVEAU
        'max_students',     // ✅ NOUVEAU
        'is_published',
        'instructor_id',
        'category_id',      // ✅ NOUVEAU
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_published' => 'boolean',
        'duration_minutes' => 'integer',
        'max_students' => 'integer',
    ];

    // ✅ AJOUT : Dates pour soft deletes
    protected $dates = ['deleted_at'];

    // ============================================
    // AUTO-GÉNÉRATION DU SLUG (TON CODE - PARFAIT)
    // ============================================
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

    // ============================================
    // RELATIONS
    // ============================================

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class)->orderBy('order');
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'enrollments')
            ->withPivot('progress', 'status', 'completed_at', 'last_accessed_at')
            ->withTimestamps();
    }

    // ✅ NOUVELLE RELATION : Catégorie
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // ============================================
    // SCOPES (TON CODE - PARFAIT)
    // ============================================

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeByInstructor($query, int $instructorId)
    {
        return $query->where('instructor_id', $instructorId);
    }

    // ✅ NOUVEAUX SCOPES UTILES
    public function scopeByCategory($query, int $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function scopeByLevel($query, string $level)
    {
        return $query->where('difficulty_level', $level);
    }

    public function scopeSearch($query, string $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        });
    }

    // ============================================
    // HELPER METHODS (TON CODE - EXCELLENT)
    // ============================================

    public function isFree(): bool
    {
        return $this->price == 0;
    }

    public function formattedPrice(): string
    {
        if ($this->isFree()) {
            return 'Gratuit';
        }
        return number_format($this->price, 2, ',', ' ') . ' €';
    }

    public function enrolledCount(): int
    {
        return $this->enrollments()->where('status', 'active')->count();
    }

    public function isOwnedBy(User $user): bool
    {
        return $this->instructor_id === $user->id;
    }

    // ✅ NOUVEAU : Places restantes
    public function availableSeats(): ?int
    {
        if (!$this->max_students) {
            return null; // Illimité
        }
        return max(0, $this->max_students - $this->enrolledCount());
    }

    public function isFull(): bool
    {
        if (!$this->max_students) {
            return false;
        }
        return $this->enrolledCount() >= $this->max_students;
    }

    // ✅ NOUVEAU : Durée formatée
    public function formattedDuration(): string
    {
        if (!$this->duration_minutes) {
            return 'N/A';
        }

        $hours = floor($this->duration_minutes / 60);
        $minutes = $this->duration_minutes % 60;

        if ($hours > 0) {
            return $hours . 'h' . ($minutes > 0 ? ' ' . $minutes . 'min' : '');
        }

        return $minutes . 'min';
    }
}
