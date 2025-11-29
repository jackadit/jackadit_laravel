<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Page À propos
     */
    public function about()
    {
        return view('pages.about', [
            'pageTitle' => 'À propos - Jackadit.com',
            'metaDescription' => 'Découvrez Jackadit, votre plateforme d\'apprentissage en ligne'
        ]);
    }
}
