<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;

class CoursePolicy
{
    // Un instructor peut voir ses propres cours
    public function view(User $user, Course $course)
    {
        return $user->id === $course->instructor_id || $user->isAdmin();
    }

    // Un instructor peut modifier ses propres cours
    public function update(User $user, Course $course)
    {
        return $user->id === $course->instructor_id;
    }

    // Un instructor peut supprimer ses propres cours
    public function delete(User $user, Course $course)
    {
        return $user->id === $course->instructor_id;
    }
}
