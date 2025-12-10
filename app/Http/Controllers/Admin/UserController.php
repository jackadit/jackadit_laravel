<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Liste des utilisateurs
    public function index(Request $request)
    {
        $query = User::query();

        // Filtres
        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', "%{$request->search}%")
                    ->orWhere('email', 'like', "%{$request->search}%");
            });
        }

        $users = $query->withCount(['enrollments', 'courses'])
            ->latest()
            ->paginate(20);

        return view('admin.users.index', compact('users'));
    }

    // Afficher un utilisateur
    public function show(User $user)
    {
        $user->load([
            'enrollments.course',
            'courses' => function($q) {
                $q->withCount('enrollments');
            }
        ]);

        return view('admin.users.show', compact('user'));
    }

    // Formulaire de création
    public function create()
    {
        return view('admin.users.create');
    }

    // Créer un utilisateur
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role' => ['required', Rule::in(['student', 'instructor', 'admin'])],
            'bio' => 'nullable|string',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['email_verified_at'] = now(); // Admin créé = vérifié

        User::create($validated);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Utilisateur créé avec succès.');
    }

    // Formulaire d'édition
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'role' => ['required', Rule::in(['student', 'instructor', 'admin'])],
            'bio' => 'nullable|string',
        ]);

        // Changement de mot de passe optionnel
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'min:8|confirmed',
            ]);
            $validated['password'] = Hash::make($request->password);
        }

        $user->update($validated);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Utilisateur mis à jour avec succès.');
    }

    // Supprimer un utilisateur
    public function destroy(User $user)
    {
        // Protection : empêcher la suppression de son propre compte
        if ($user->id === auth()->id()) {
            return back()->with('error', 'Vous ne pouvez pas supprimer votre propre compte.');
        }

        // Supprimer les données liées (optionnel : à adapter selon tes besoins)
        $user->enrollments()->delete();
        $user->courses()->delete();

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Utilisateur supprimé avec succès.');
    }
}
