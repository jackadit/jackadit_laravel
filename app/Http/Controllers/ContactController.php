<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Formulaire de contact
     */
    public function index()
    {
        return view('pages.contact', [
            'pageTitle' => 'Contact - Jackadit.com',
            'metaDescription' => 'Contactez-nous pour toute question'
        ]);
    }

    /**
     * Envoi du formulaire
     */
    public function send(Request $request)
    {
        // À implémenter plus tard
        return redirect()->route('contact')->with('success', 'Message envoyé !');
    }
}
