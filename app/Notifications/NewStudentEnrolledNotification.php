<?php

namespace App\Notifications;

use App\Models\User;
use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewStudentEnrolledNotification extends Notification
{
    use Queueable;

    protected User $student;
    protected Course $course;

    public function __construct(User $student, Course $course)
    {
        $this->student = $student;
        $this->course = $course;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('📚 Nouvel étudiant inscrit')
            ->greeting('Bonjour !')
            ->line("**{$this->student->name}** vient de s'inscrire à votre cours : **{$this->course->title}**")
            ->action('Voir le cours', route('instructor.courses.show', $this->course))
            ->line('Bonne formation !');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'student_id' => $this->student->id,
            'student_name' => $this->student->name,
            'student_email' => $this->student->email,
            'course_id' => $this->course->id,
            'course_title' => $this->course->title,
        ];
    }
}
s
