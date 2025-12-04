@extends('layouts.app')

@php
    $pageTitle = 'Accueil';
    $metaDescription = 'Apprends le développement web avec des cours PHP, MySQL, accessibilité et bien plus';
@endphp

@section('content')

    {{-- Hero Section --}}
    <x-hero
        title="Deviens <span class='bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent'>Développeur Web</span>"
        subtitle="🚀 Formation 100% pratique"
        description="Apprends PHP, MySQL et l'accessibilité web avec des cours structurés et des projets concrets. Gratuit et accessible à tous."
        ctaText="Commencer gratuitement"
        ctaLink="{{ route('cours.index') }}"
        secondaryCtaText="Voir les cours"
        secondaryCtaLink="{{ route('cours.index') }}"
        type="home"
    />

    {{-- Stats Section --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <x-stats-badge
                value="50+"
                label="Cours disponibles"
                color="primary"
                :icon="'<svg class=\'w-6 h-6\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\'/></svg>'"
            />

            <x-stats-badge
                value="1000+"
                label="Étudiants actifs"
                color="success"
                :icon="'<svg class=\'w-6 h-6\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\'/></svg>'"
            />

            <x-stats-badge
                value="4.9/5"
                label="Satisfaction"
                color="warning"
                :icon="'<svg class=\'w-6 h-6\' fill=\'currentColor\' viewBox=\'0 0 20 20\'><path d=\'M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\'/></svg>'"
            />
        </div>
    </section>

    {{-- Catégories Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Explore nos <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">formations</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Des cours structurés pour apprendre à ton rythme, du débutant à l'expert
                </p>
            </div>

            {{-- Grid de cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">

                {{-- Card PHP --}}
                <x-card
                    title="PHP"
                    description="Maîtrise le langage serveur le plus utilisé du web"
                    :href="route('cours.category', 'php')"
                    :badge="[
                    'text' => 'Populaire',
                    'color' => 'bg-yellow-100 text-yellow-700'
                ]"
                    :stats="[
                    'lessons' => '25',
                    'duration' => '12h',
                    'difficulty_level' => 'Débutant'
                ]"
                    :difficulty="2"
                    type="category"
                >
                    <x-slot:icon>
                        <span class="text-2xl">🐘</span>
                    </x-slot:icon>
                </x-card>

                {{-- Card Base de données --}}
                <x-card
                    title="Base de données"
                    description="MySQL, PostgreSQL, conception et requêtes SQL"
                    :href="route('cours.category', 'bdd')"
                    :badge="[
                    'text' => 'Essentiel',
                    'color' => 'bg-blue-100 text-blue-700'
                ]"
                    :stats="[
                    'lessons' => '18',
                    'duration' => '8h',
                    'difficulty_level' => 'Intermédiaire'
                ]"
                    :difficulty="2"
                    type="category"
                >
                    <x-slot:icon>
                        <span class="text-2xl">🗄️</span>
                    </x-slot:icon>
                </x-card>

                {{-- Card Accessibilité --}}
                <x-card
                    title="Accessibilité"
                    description="Crée des sites web accessibles à tous"
                    :href="route('cours.category', 'accessibilite')"
                    :badge="[
                    'text' => 'Important',
                    'color' => 'bg-green-100 text-green-700'
                ]"
                    :stats="[
                    'lessons' => '15',
                    'duration' => '6h',
                    'difficulty_level' => 'Tous niveaux'
                ]"
                    :difficulty="1"
                    type="category"
                >
                    <x-slot:icon>
                        <span class="text-2xl">♿</span>
                    </x-slot:icon>
                </x-card>

            </div>

            {{-- CTA --}}
            <div class="text-center mt-12">
                <a href="{{ route('cours.index') }}"
                   class="inline-flex items-center space-x-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <span>Voir tous les cours</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

        </div>
    </section>


    {{-- CTA Section --}}
    <x-cta-section
        title="Prêt à démarrer ton aventure ?"
        description="Rejoins des milliers de développeurs en devenir et commence à apprendre gratuitement dès aujourd'hui"
        ctaText="Commencer maintenant"
        ctaLink="{{ route('cours.index') }}"
    />

@endsection
