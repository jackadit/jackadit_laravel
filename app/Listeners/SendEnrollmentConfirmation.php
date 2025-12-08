<?php

namespace App\Listeners;

use App\Events\StudentEnrolled;
use App\Notifications\EnrollmentConfirmationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEnrollmentConfirmation implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     */
    public function handle(StudentEnrolled $event): void
    {
        // Envoyer confirmation à l'étudiant
        $event->student->notify(
            new EnrollmentConfirmationNotification($event->course)
        );

        // Log
        \Log::info("Inscription confirmée", [
            'user_id' => $event->student->id,
            'course_id' => $event->course->id,
            'course_title' => $event->course->title,
        ]);
    }
}
