<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Plateforme d'apprentissage en ligne</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gradient-to-br from-indigo-50 via-white to-purple-50">

<!-- Navigation Header -->
<header class="bg-white shadow-sm border-b border-gray-100">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="text-3xl">🎓</div>
                <h1 class="text-2xl font-bold text-indigo-600">
                    {{ config('app.name', 'Jackadit.com') }}
                </h1>
            </div>

            <!-- Navigation Links -->
            @auth
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}"
                       class="text-gray-700 hover:text-indigo-600 font-medium transition">
                        Tableau de bord
                    </a>
                    <a href="{{ route('courses.index') }}"
                       class="text-gray-700 hover:text-indigo-600 font-medium transition">
                        Mes cours
                    </a>
                </div>
            @else
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}"
                       class="text-gray-700 hover:text-indigo-600 font-medium transition">
                        Connexion
                    </a>
                    <a href="{{ route('register') }}"
                       class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-medium shadow-sm">
                        Inscription
                    </a>
                </div>
            @endauth
        </div>
    </nav>
</header>

<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center">
        <!-- Badge -->
        <div class="inline-flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium mb-6">
            🚀 Nouvelle plateforme d'apprentissage en ligne
        </div>

        <!-- Titre Principal -->
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
            Apprenez à votre
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                    rythme
                </span>
        </h1>

        <!-- Sous-titre -->
        <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-10">
            Accédez à des centaines de cours en ligne, suivez votre progression et obtenez des certificats reconnus.
            Commencez votre parcours d'apprentissage dès aujourd'hui !
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            @guest
                <a href="{{ route('register') }}"
                   class="w-full sm:w-auto px-8 py-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-semibold shadow-lg hover:shadow-xl text-lg">
                    🎯 Commencer gratuitement
                </a>
                <a href="{{ route('courses.index') }}"
                   class="w-full sm:w-auto px-8 py-4 bg-white text-indigo-600 rounded-lg hover:bg-gray-50 transition font-semibold border-2 border-indigo-600 text-lg">
                    📚 Parcourir les cours
                </a>
            @else
                <a href="{{ route('dashboard') }}"
                   class="w-full sm:w-auto px-8 py-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-semibold shadow-lg hover:shadow-xl text-lg">
                    🎯 Accéder à mon tableau de bord
                </a>
                <a href="{{ route('courses.index') }}"
                   class="w-full sm:w-auto px-8 py-4 bg-white text-indigo-600 rounded-lg hover:bg-gray-50 transition font-semibold border-2 border-indigo-600 text-lg">
                    📚 Voir mes cours
                </a>
            @endguest
        </div>
    </div>

    <!-- Image/Illustration Hero -->
    <div class="mt-16 relative">
        <div class="aspect-video bg-gradient-to-br from-indigo-100 to-purple-100 rounded-2xl shadow-2xl flex items-center justify-center">
            <div class="text-9xl opacity-30">🎓📚💡</div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">
            Pourquoi choisir {{ config('app.name') }} ?
        </h2>
        <p class="text-xl text-gray-600">
            Une plateforme complète pour apprendre efficacement
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Feature 1 -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition border border-gray-100">
            <div class="text-5xl mb-4">🎯</div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Apprentissage flexible
            </h3>
            <p class="text-gray-600">
                Apprenez à votre rythme, où vous voulez et quand vous voulez. Accès 24/7 à tous vos cours.
            </p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition border border-gray-100">
            <div class="text-5xl mb-4">🏆</div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Certifications reconnues
            </h3>
            <p class="text-gray-600">
                Obtenez des certificats à la fin de chaque cours pour valoriser vos compétences.
            </p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition border border-gray-100">
            <div class="text-5xl mb-4">👨‍🏫</div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Formateurs experts
            </h3>
            <p class="text-gray-600">
                Apprenez auprès de professionnels expérimentés dans leur domaine.
            </p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition border border-gray-100">
            <div class="text-5xl mb-4">📊</div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Suivi de progression
            </h3>
            <p class="text-gray-600">
                Visualisez votre avancement en temps réel et atteignez vos objectifs.
            </p>
        </div>

        <!-- Feature 5 -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition border border-gray-100">
            <div class="text-5xl mb-4">🧪</div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Quiz interactifs
            </h3>
            <p class="text-gray-600">
                Testez vos connaissances avec des quiz après chaque leçon.
            </p>
        </div>

        <!-- Feature 6 -->
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition border border-gray-100">
            <div class="text-5xl mb-4">💬</div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Communauté active
            </h3>
            <p class="text-gray-600">
                Échangez avec d'autres apprenants et posez vos questions aux formateurs.
            </p>
        </div>

    </div>
</section>

<!-- Stats Section -->
<section class="bg-indigo-600 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center text-white">

            <div>
                <div class="text-5xl font-bold mb-2">500+</div>
                <div class="text-indigo-200 text-lg">Cours disponibles</div>
            </div>

            <div>
                <div class="text-5xl font-bold mb-2">10K+</div>
                <div class="text-indigo-200 text-lg">Étudiants actifs</div>
            </div>

            <div>
                <div class="text-5xl font-bold mb-2">50+</div>
                <div class="text-indigo-200 text-lg">Formateurs experts</div>
            </div>

            <div>
                <div class="text-5xl font-bold mb-2">95%</div>
                <div class="text-indigo-200 text-lg">Satisfaction</div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl shadow-2xl p-12 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">
            Prêt à commencer votre parcours ?
        </h2>
        <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
            Rejoignez des milliers d'apprenants qui ont déjà transformé leur carrière grâce à nos cours.
        </p>
        @guest
            <a href="{{ route('register') }}"
               class="inline-block px-8 py-4 bg-white text-indigo-600 rounded-lg hover:bg-gray-100 transition font-bold text-lg shadow-lg">
                🚀 Créer mon compte gratuitement
            </a>
        @else
            <a href="{{ route('dashboard') }}"
               class="inline-block px-8 py-4 bg-white text-indigo-600 rounded-lg hover:bg-gray-100 transition font-bold text-lg shadow-lg">
                🎯 Accéder à mon espace
            </a>
        @endguest
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Colonne 1 : À propos -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4">{{ config('app.name') }}</h3>
                <p class="text-sm text-gray-400">
                    La plateforme d'apprentissage en ligne pour développer vos compétences et atteindre vos objectifs.
                </p>
            </div>

            <!-- Colonne 2 : Navigation -->
            <div>
                <h4 class="text-white font-semibold mb-4">Navigation</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('courses.index') }}" class="hover:text-white transition">Cours</a></li>
                    <li><a href="#" class="hover:text-white transition">À propos</a></li>
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Colonne 3 : Ressources -->
            <div>
                <h4 class="text-white font-semibold mb-4">Ressources</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Centre d'aide</a></li>
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                </ul>
            </div>

            <!-- Colonne 4 : Légal -->
            <div>
                <h4 class="text-white font-semibold mb-4">Légal</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Conditions d'utilisation</a></li>
                    <li><a href="#" class="hover:text-white transition">Politique de confidentialité</a></li>
                    <li><a href="#" class="hover:text-white transition">Mentions légales</a></li>
                </ul>
            </div>

        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
        </div>
    </div>
</footer>

</body>
</html>
