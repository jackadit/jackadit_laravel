<?php

namespace App\Events;

use App\Models\User;
use App\Models\Quiz;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QuizCompleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $user;
    public Quiz $quiz;
    public float $score;
    public bool $passed;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user, Quiz $quiz, float $score, bool $passed)
    {
        $this->user = $user;
        $this->quiz = $quiz;
        $this->score = $score;
        $this->passed = $passed;
    }
}
