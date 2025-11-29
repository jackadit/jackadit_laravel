<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plateforme d'apprentissage du développement web - PHP, MySQL, Accessibilité">
    <title>{{ $pageTitle ?? 'Jackadit.com' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

{{-- Header --}}
<header class="bg-white shadow-sm border-b border-gray-200">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-primary-600 hover:text-primary-700 transition-colors">
                Jackadit.com
            </a>

            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">
                    Cours
                </a>
                <a href="#" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">
                    À propos
                </a>
                {{-- Future : Connexion --}}
                {{-- <a href="#" class="btn-primary">Connexion</a> --}}
            </div>
        </div>
    </nav>
</header>

{{-- Contenu principal --}}
<main class="flex-grow">
    @yield('content')
</main>

{{-- Footer --}}
<footer class="bg-gray-900 text-gray-400 mt-20">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-white font-bold text-lg mb-4">Jackadit.com</h3>
                <p class="text-sm">
                    Plateforme d'apprentissage du développement web.
                    PHP, MySQL, Accessibilité et bien plus.
                </p>
            </div>

            <div>
                <h3 class="text-white font-bold text-lg mb-4">Cours disponibles</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/cours/php" class="hover:text-white transition-colors">PHP</a></li>
                    <li><a href="/cours/bdd" class="hover:text-white transition-colors">Base de données</a></li>
                    <li><a href="/cours/accessibilite" class="hover:text-white transition-colors">Accessibilité</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-bold text-lg mb-4">Contact</h3>
                <p class="text-sm">
                    Des questions ? N'hésitez pas à nous contacter.
                </p>
                {{-- Future : Formulaire contact --}}
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
            <p>&copy; {{ date('Y') }} Jackadit.com - Tous droits réservés</p>
        </div>
    </div>
</footer>

</body>
</html>
