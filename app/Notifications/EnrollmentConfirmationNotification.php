<?php

namespace App\Notifications;

use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EnrollmentConfirmationNotification extends Notification
{
    use Queueable;

    protected Course $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('✅ Inscription confirmée !')
            ->greeting('Bienvenue !')
            ->line("Vous êtes maintenant inscrit au cours : **{$this->course->title}**")
            ->action('Commencer le cours', route('courses.show', $this->course))
            ->line('Bon apprentissage !');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'course_id' => $this->course->id,
            'course_title' => $this->course->title,
            'instructor' => $this->course->instructor->name,
        ];
    }
}
