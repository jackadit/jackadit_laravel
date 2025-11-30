<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'answer_text',
        'is_correct',
        'order',
    ];

    protected $casts = [
        'is_correct' => 'boolean',
    ];

    // Relation vers Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Relation vers les réponses des utilisateurs
    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class);
    }
}
