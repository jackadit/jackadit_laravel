<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'title',
        'description',
        'passing_score',
        'time_limit',
        'max_attempts',
        'shuffle_questions',
        'show_correct_answers',
        'is_active',
    ];

    protected $casts = [
        'shuffle_questions' => 'boolean',
        'show_correct_answers' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Relations
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class)->orderBy('order');
    }

    public function attempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    // Méthodes utiles
    public function totalPoints()
    {
        return $this->questions()->sum('points');
    }

    public function userAttempts($userId)
    {
        return $this->attempts()->where('user_id', $userId);
    }

    public function canUserAttempt($userId)
    {
        $attemptsCount = $this->userAttempts($userId)->count();
        return $attemptsCount < $this->max_attempts;
    }

    public function bestScore($userId)
    {
        return $this->userAttempts($userId)->max('score');
    }
}
