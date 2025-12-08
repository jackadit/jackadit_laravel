<?php

namespace App\Listeners;

use App\Events\StudentEnrolled;
use App\Notifications\NewStudentEnrolledNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyInstructor implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     */
    public function handle(StudentEnrolled $event): void
    {
        $instructor = $event->course->instructor;

        if ($instructor) {
            $instructor->notify(
                new NewStudentEnrolledNotification($event->student, $event->course)
            );
        }

        // Log
        \Log::info("Instructeur notifié d'une nouvelle inscription", [
            'instructor_id' => $instructor?->id,
            'student_id' => $event->student->id,
            'course_id' => $event->course->id,
        ]);
    }
}
