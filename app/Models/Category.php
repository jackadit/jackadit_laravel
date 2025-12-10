<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    // ========================================
    // 🔧 CONFIGURATION
    // ========================================

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'color',
        'order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'order' => 'integer',
        ];
    }

    // ========================================
    // 🔄 EVENTS
    // ========================================

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }

            if (is_null($category->order)) {
                $category->order = static::max('order') + 1;
            }
        });

        static::updating(function ($category) {
            if ($category->isDirty('name')) {
                $category->slug = Str::slug($category->name);
            }
        });
    }

    // ========================================
    // 🔗 RELATIONS
    // ========================================

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    // ========================================
    // 🔍 SCOPES
    // ========================================

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function scopeWithCoursesCount($query)
    {
        return $query->withCount(['courses' => function($q) {
            $q->published();
        }]);
    }

    public function scopePopular($query, int $minCourses = 3)
    {
        return $query->has('courses', '>=', $minCourses);
    }

    // ========================================
    // 📊 ACCESSORS
    // ========================================

    public function getPublishedCoursesCountAttribute(): int
    {
        return $this->courses()->published()->count();
    }

    public function getTotalStudentsAttribute(): int
    {
        return Enrollment::whereHas('course', function($q) {
            $q->where('category_id', $this->id);
        })->distinct('user_id')->count('user_id');
    }

    public function getAverageRatingAttribute(): float
    {
        return $this->courses()->published()->avg('rating') ?? 0;
    }

    public function getIconHtmlAttribute(): string
    {
        if (empty($this->icon)) {
            return '📚';
        }

        // Si c'est un emoji
        if (mb_strlen($this->icon) <= 2) {
            return $this->icon;
        }

        // Si c'est une classe Font Awesome
        return "<i class=\"{$this->icon}\"></i>";
    }

    public function getColorStyleAttribute(): string
    {
        return $this->color ?? '#3B82F6';
    }

    // ========================================
    // 🛠️ HELPERS
    // ========================================

    public function getPopularCourses(int $limit = 5)
    {
        return $this->courses()
            ->published()
            ->withCount('enrollments')
            ->orderByDesc('enrollments_count')
            ->limit($limit)
            ->get();
    }

    public function getLatestCourses(int $limit = 5)
    {
        return $this->courses()
            ->published()
            ->latest()
            ->limit($limit)
            ->get();
    }
}
