<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'user_id',
        'answers',
        'score',
        'points_earned',
        'total_points',
        'passed',
        'started_at',
        'completed_at',
        'time_spent',
    ];

    protected $casts = [
        'answers' => 'array',
        'passed' => 'boolean',
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    // Relations
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Calculer le score
    public function calculateScore()
    {
        $quiz = $this->quiz;
        $questions = $quiz->questions;

        $pointsEarned = 0;
        $totalPoints = $questions->sum('points');

        foreach ($questions as $question) {
            $userAnswer = $this->answers[$question->id] ?? null;

            if ($question->isCorrect($userAnswer)) {
                $pointsEarned += $question->points;
            }
        }

        $score = ($totalPoints > 0) ? round(($pointsEarned / $totalPoints) * 100) : 0;
        $passed = $score >= $quiz->passing_score;

        $this->update([
            'points_earned' => $pointsEarned,
            'total_points' => $totalPoints,
            'score' => $score,
            'passed' => $passed,
            'completed_at' => now(),
        ]);

        return $this;
    }
}
