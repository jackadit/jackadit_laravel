<?php

namespace App\Listeners;

use App\Events\LessonCompleted;
use App\Notifications\LessonCompletedNotification;

class SendLessonCompletionNotification
{
    public function handle(LessonCompleted $event): void
    {
        // Notifier l'utilisateur
        $event->user->notify(new LessonCompletedNotification($event->lesson));

        // Vérifier si cours complet
        $course = $event->lesson->course;
        $totalLessons = $course->lessons()->where('is_published', true)->count();
        $completedLessons = $event->user->lessonCompletions()
            ->whereHas('lesson', fn($q) => $q->where('course_id', $course->id))
            ->where('is_completed', true)
            ->count();

        // Si 100% → Certificat
        if ($totalLessons === $completedLessons) {
            event(new \App\Events\CourseCompleted($event->user, $course));
        }
    }
}
