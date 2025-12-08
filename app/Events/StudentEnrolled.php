<?php

namespace App\Events;

use App\Models\User;
use App\Models\Course;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StudentEnrolled
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $student;
    public Course $course;

    /**
     * Create a new event instance.
     */
    public function __construct(User $student, Course $course)
    {
        $this->student = $student;
        $this->course = $course;
    }
}
