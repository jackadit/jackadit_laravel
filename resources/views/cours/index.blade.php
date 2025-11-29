@extends('layouts.app')

@section('content')

    <!-- ============================================
     HERO SECTION COURS
     ============================================ -->
    <section class="relative overflow-hidden py-16 lg:py-24">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiM5Q0EzQUYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6bTAtMzBjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6TTQgMzRjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6bTAtMzBjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')] opacity-40"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-lg mb-6">
                    <svg class="w-5 h-5 text-primary-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <span class="text-sm font-medium text-gray-700">
                    {{ count($categories) }} catégories • {{ $totalCours }} leçons disponibles
                </span>
                </div>

                <!-- Titre -->
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                <span class="bg-gradient-to-r from-primary-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    Apprenez le développement web
                </span>
                </h1>

                <!-- Description -->
                <p class="text-lg lg:text-xl text-gray-600 mb-8">
                    Des cours complets et progressifs pour maîtriser PHP, MySQL, l'accessibilité et bien plus encore.
                </p>

                <!-- Barre de recherche -->
                <div class="max-w-2xl mx-auto">
                    <div class="relative">
                        <input type="text"
                               id="search-cours"
                               placeholder="Rechercher un cours..."
                               class="w-full px-6 py-4 pl-14 rounded-2xl border-2 border-gray-200 focus:border-primary-500 focus:ring-4 focus:ring-primary-100 outline-none transition-all text-lg shadow-lg bg-white/80 backdrop-blur-sm">
                        <svg class="absolute left-5 top-1/2 transform -translate-y-1/2 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         GRILLE DES CATÉGORIES
         ============================================ -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Titre section -->
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Explorez nos formations
                </h2>
                <p class="text-lg text-gray-600">
                    Choisissez une catégorie pour commencer votre apprentissage
                </p>
            </div>

            <!-- Grille des catégories -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @foreach($categories as $category)
                    <a href="{{ route('cours.category', $category['slug']) }}"
                       class="category-card group bg-white rounded-2xl border-2 border-gray-100 hover:border-primary-300 hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2"
                       data-title="{{ strtolower($category['title']) }}"
                       data-description="{{ strtolower($category['description'] ?? '') }}">

                        <!-- Icône en haut avec gradient -->
                        <div class="relative h-32 bg-gradient-to-br from-primary-500 to-purple-600 flex items-center justify-center overflow-hidden">
                            <!-- Pattern background -->
                            <div class="absolute inset-0 opacity-10">
                                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAgTSAwIDIwIEwgNDAgMjAgTSAyMCAwIEwgMjAgNDAgTSAwIDMwIEwgNDAgMzAgTSAzMCAwIEwgMzAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==');"></div>
                            </div>

                            <!-- Icône -->
                            <div class="relative text-6xl transform group-hover:scale-110 transition-transform duration-300">
                                {{ $category['icon'] }}
                            </div>
                        </div>

                        <!-- Contenu -->
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors">
                                {{ $category['title'] }}
                            </h3>

                            @if($category['description'])
                                <p class="text-gray-600 mb-4 line-clamp-2">
                                    {{ $category['description'] }}
                                </p>
                            @endif

                            <!-- Stats et bouton -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500 flex items-center">
                            <svg class="w-4 h-4 mr-1 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            {{ $category['lessonsCount'] }} leçon{{ $category['lessonsCount'] > 1 ? 's' : '' }}
                        </span>
                                <span class="text-primary-600 font-semibold flex items-center group-hover:translate-x-1 transition-transform">
                            Commencer
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                            </div>
                        </div>

                    </a>
                @endforeach
            </div>

            <!-- Message si aucune catégorie -->
            @if(count($categories) === 0)
                <div class="text-center py-16">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Aucun cours disponible</h3>
                    <p class="text-gray-600">Les cours seront bientôt disponibles.</p>
                </div>
            @endif

        </div>
    </section>

    <!-- ============================================
         SECTION CTA (Call To Action)
         ============================================ -->
    <section class="py-20 bg-gradient-to-br from-primary-600 to-purple-700 relative overflow-hidden">
        <!-- Motif de fond -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNGRkZGRkYiIGZpbGwtb3BhY2l0eT0iMSI+PHBhdGggZD0iTTM2IDM0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wLTMwYzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek00IDM0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wLTMwYzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00eiIvPjwvZz48L2c+PC9zdmc+');"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h2 class="text-3xl lg:text-5xl font-bold mb-6">
                    Prêt à commencer votre apprentissage ?
                </h2>
                <p class="text-xl mb-8 text-white/90">
                    Rejoignez des milliers d'étudiants et développez vos compétences dès aujourd'hui
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#cours-disponibles" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl hover:bg-gray-50 transition-all transform hover:scale-105 shadow-xl">
                        Voir tous les cours
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-xl hover:bg-white/10 transition-all">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Script de recherche -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-cours');
            const cards = document.querySelectorAll('.category-card');

            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const searchTerm = e.target.value.toLowerCase().trim();

                    cards.forEach(card => {
                        const title = card.dataset.title || '';
                        const description = card.dataset.description || '';

                        if (searchTerm === '' || title.includes(searchTerm) || description.includes(searchTerm)) {
                            card.classList.remove('hidden');
                            card.style.display = '';
                        } else {
                            card.classList.add('hidden');
                        }
                    });

                    // Message si aucun résultat
                    const visibleCards = Array.from(cards).filter(card => !card.classList.contains('hidden'));
                    const grid = cards[0]?.parentElement;

                    if (visibleCards.length === 0 && grid) {
                        let noResults = document.getElementById('no-results');
                        if (!noResults) {
                            noResults = document.createElement('div');
                            noResults.id = 'no-results';
                            noResults.className = 'col-span-full text-center py-12';
                            noResults.innerHTML = `
                        <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Aucun cours trouvé</h3>
                        <p class="text-gray-600">Essayez avec d'autres mots-clés</p>
                    `;
                            grid.appendChild(noResults);
                        }
                    } else {
                        const noResults = document.getElementById('no-results');
                        if (noResults) {
                            noResults.remove();
                        }
                    }
                });
            }

            // Smooth scroll pour le bouton CTA
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });
        });
    </script>

@endsection
