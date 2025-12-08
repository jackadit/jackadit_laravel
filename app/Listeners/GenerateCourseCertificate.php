<?php

namespace App\Listeners;

use App\Events\CourseCompleted;
use App\Models\Certificate;
use App\Notifications\CertificateGeneratedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;

class GenerateCourseCertificate implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     */
    public function handle(CourseCompleted $event): void
    {
        // Vérifier si certificat existe déjà
        $existingCertificate = Certificate::where('user_id', $event->user->id)
            ->where('course_id', $event->course->id)
            ->first();

        if ($existingCertificate) {
            return; // Ne pas recréer
        }

        // Générer certificat
        $certificate = Certificate::create([
            'user_id' => $event->user->id,
            'course_id' => $event->course->id,
            'certificate_number' => $this->generateCertificateNumber(),
            'issued_at' => now(),
        ]);

        // Notification
        $event->user->notify(new CertificateGeneratedNotification($certificate));

        // Log
        \Log::info("Certificat généré", [
            'user_id' => $event->user->id,
            'course_id' => $event->course->id,
            'certificate_number' => $certificate->certificate_number,
        ]);
    }

    /**
     * Générer numéro unique de certificat
     */
    private function generateCertificateNumber(): string
    {
        return 'CERT-' . strtoupper(Str::random(8)) . '-' . now()->format('Y');
    }
}
