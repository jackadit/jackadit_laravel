<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Page d'accueil
     */
    public function index()
    {
        $cours = [
            [
                'titre' => 'Introduction à l\'accessibilité numérique',
                'description' => 'Apprenez à rendre vos sites web accessibles à tous les utilisateurs, y compris les personnes en situation de handicap.',
                'duree' => '12 leçons',
                'icon' => '♿',
                'url' => route('cours.category', ['category' => 'accessibilite'])
            ],
            [
                'titre' => 'Base de données',
                'description' => 'Apprenez à concevoir une base de données.',
                'duree' => '8 leçons',
                'icon' => '🗄️',
                'url' => route('cours.category', ['category' => 'base-de-donnees'])
            ],
            [
                'titre' => 'Introduction à VBA',
                'description' => 'Les bases de la programmation Excel VBA.',
                'duree' => '6 leçons',
                'icon' => '📊',
                'url' => route('cours.category', ['category' => 'vba'])
            ],
            [
                'titre' => 'htmlspecialchars()',
                'description' => 'OEIS - Qualité Logique/sécurité et Organisation.',
                'duree' => '3 leçons',
                'icon' => '🔒',
                'url' => route('cours.category', ['category' => 'htmlspecialchars'])
            ],
            [
                'titre' => 'Introduction à Windows XP',
                'description' => 'OS 03 : Ouvrir l\'invité personnel élévant...',
                'duree' => '13 leçons',
                'icon' => '💻',
                'url' => route('cours.category', ['category' => 'windows-xp'])
            ]
        ];

        return view('home', [
            'pageTitle' => 'Accueil - Jackadit.com',
            'metaDescription' => 'Apprenez le développement web avec des cours complets et progressifs',
            'cours' => $cours
        ]);
    }
}
