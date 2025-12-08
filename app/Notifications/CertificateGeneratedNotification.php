<?php

namespace App\Notifications;

use App\Models\Certificate;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CertificateGeneratedNotification extends Notification
{
    use Queueable;

    protected Certificate $certificate;

    public function __construct(Certificate $certificate)
    {
        $this->certificate = $certificate;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('🏆 Certificat de réussite !')
            ->greeting('Félicitations !')
            ->line("Vous avez terminé le cours : **{$this->certificate->course->title}**")
            ->line("Votre certificat n° **{$this->certificate->certificate_number}** est maintenant disponible.")
            ->action('Télécharger le certificat', route('certificates.download', $this->certificate))
            ->line('Bravo pour votre réussite !');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'certificate_id' => $this->certificate->id,
            'certificate_number' => $this->certificate->certificate_number,
            'course_id' => $this->certificate->course_id,
            'course_title' => $this->certificate->course->title,
        ];
    }
}
