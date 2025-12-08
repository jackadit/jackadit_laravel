<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Affiche le tableau de bord de l'utilisateur
     */
    public function index()
    {
        // Récupère l'utilisateur connecté avec ses inscriptions aux cours
        $user = Auth::user();

        // Charge les cours inscrits avec progression
        $enrollments = $user->enrollments()
            ->with('course')
            ->latest()
            ->get();

        return view('dashboard', compact('enrollments'));
    }
}
