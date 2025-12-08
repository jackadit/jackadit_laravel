<?php

namespace App\Notifications;

use App\Models\Lesson;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LessonCompletedNotification extends Notification
{
    use Queueable;

    protected Lesson $lesson;

    public function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('🎉 Leçon complétée !')
            ->greeting('Félicitations !')
            ->line("Vous avez terminé la leçon : **{$this->lesson->title}**")
            ->action('Continuer le cours', route('courses.show', $this->lesson->course_id))
            ->line('Continuez votre apprentissage !');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'lesson_id' => $this->lesson->id,
            'lesson_title' => $this->lesson->title,
            'course_id' => $this->lesson->course_id,
            'course_title' => $this->lesson->course->title,
        ];
    }
}
