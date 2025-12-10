<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('🎓 Création des inscriptions...');

        $students = User::where('role', 'student')->get();
        $courses = Course::where('is_published', true)->get();

        // Vérifications de sécurité
        if ($students->isEmpty()) {
            $this->command->error('❌ Aucun étudiant trouvé !');
            return;
        }

        if ($courses->isEmpty()) {
            $this->command->error('❌ Aucun cours publié trouvé !');
            $this->command->warn('Cours totaux : ' . Course::count());
            $this->command->warn('Cours publiés : ' . Course::where('is_published', true)->count());
            return;
        }

        $this->command->info("✅ {$students->count()} étudiants et {$courses->count()} cours trouvés");

        $enrollmentCount = 0;

        foreach ($students as $student) {
            // Nombre aléatoire de cours (1 à 3, mais limité par le nombre disponible)
            $maxEnrollments = min(3, $courses->count());
            $numberOfCourses = rand(1, $maxEnrollments);

            $coursesToEnroll = $courses->random($numberOfCourses);

            foreach ($coursesToEnroll as $course) {
                // Éviter les doublons
                if (Enrollment::where('user_id', $student->id)
                    ->where('course_id', $course->id)
                    ->exists()) {
                    continue;
                }

                $isCompleted = rand(0, 100) < 30;
                $enrolledAt = now()->subDays(rand(1, 60));

                Enrollment::create([
                    'user_id' => $student->id,
                    'course_id' => $course->id,
                    'payment_id' => null,
                    'status' => $isCompleted ? 'completed' : 'active',
                    'progress' => $isCompleted ? 100 : rand(10, 90),
                    'enrolled_at' => $enrolledAt,
                    'completed_at' => $isCompleted ? $enrolledAt->copy()->addDays(rand(7, 30)) : null,
                    'last_accessed_at' => now()->subDays(rand(0, 7)),
                ]);

                $enrollmentCount++;
            }
        }

        $this->command->info("✅ {$enrollmentCount} inscriptions créées !");
    }
}
