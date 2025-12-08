<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $lesson = $request->route('lesson');
        $course = $request->route('course');
        $user = auth()->user();

        // Admin/Instructeur : accès total
        if ($user->role === 'admin' || $user->id === $course->instructor_id) {
            return $next($request);
        }

        // Étudiant : vérifier inscription
        $enrollment = $user->enrollments()
            ->where('course_id', $course->id)
            ->first();

        if (!$enrollment) {
            abort(403, 'Vous devez être inscrit à ce cours.');
        }

        // Leçon gratuite : OK
        if ($lesson->is_free) {
            return $next($request);
        }

        // Leçon verrouillée : vérifier leçons précédentes
        $previousLessons = $course->lessons()
            ->where('is_published', true)
            ->where('order', '<', $lesson->order)
            ->pluck('id');

        $completedCount = $user->lessonCompletions()
            ->whereIn('lesson_id', $previousLessons)
            ->where('is_completed', true)
            ->count();

        if ($completedCount < $previousLessons->count()) {
            return redirect()
                ->route('courses.show', $course)
                ->with('error', '⛔ Vous devez compléter les leçons précédentes.');
        }

        return $next($request);
    }
}
