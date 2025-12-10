<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    // Liste des pages statiques
    public function index()
    {
        $pages = [
            ['name' => 'À propos', 'file' => 'about', 'route' => 'page.about'],
            ['name' => 'Contact', 'file' => 'contact', 'route' => 'page.contact'],
            ['name' => 'CGU', 'file' => 'terms', 'route' => 'page.terms'],
            ['name' => 'Politique de confidentialité', 'file' => 'privacy', 'route' => 'page.privacy'],
        ];

        return view('admin.pages.index', compact('pages'));
    }

    // Éditer une page
    public function edit($page)
    {
        $viewPath = resource_path("views/pages/{$page}.blade.php");

        if (!File::exists($viewPath)) {
            abort(404, 'Page introuvable');
        }

        $content = File::get($viewPath);

        return view('admin.pages.edit', compact('page', 'content'));
    }

    // Mettre à jour une page
    public function update(Request $request, $page)
    {
        $validated = $request->validate([
            'content' => 'required|string',
        ]);

        $viewPath = resource_path("views/pages/{$page}.blade.php");

        if (!File::exists($viewPath)) {
            abort(404, 'Page introuvable');
        }

        File::put($viewPath, $validated['content']);

        return redirect()
            ->route('admin.pages.index')
            ->with('success', 'Page mise à jour avec succès.');
    }
}
