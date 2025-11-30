<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question_text',
        'type',
        'options',
        'correct_answers',
        'points',
        'explanation',
        'order',
    ];

    protected $casts = [
        'options' => 'array',
        'correct_answers' => 'array',
    ];

    // ✅ Relation vers Quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // ✅ AJOUTE CETTE RELATION
    public function answers()
    {
        return $this->hasMany(Answer::class)->orderBy('order');
    }

    // Vérifier si la réponse est correcte
    public function isCorrect($answer)
    {
        if ($this->type === 'multiple_choice' || $this->type === 'true_false') {
            return in_array($answer, $this->correct_answers);
        }

        if ($this->type === 'short_answer') {
            // Comparaison insensible à la casse
            $correct = array_map('strtolower', $this->correct_answers);
            return in_array(strtolower($answer), $correct);
        }

        return false;
    }
}
