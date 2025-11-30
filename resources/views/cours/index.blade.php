@extends('layouts.app')

@section('title', 'Cours - JackAdIT')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- En-tête -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">📚 Tous mes cours</h1>
            <p class="text-xl text-gray-600">Explorez mes ressources pédagogiques par catégorie</p>
        </div>

        <!-- Grille de cards (IDENTIQUE à home.blade.php) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @forelse($categories as $category)
                <x-card
                    :title="$category['title']"
                    :description="$category['description']"
                    :icon="$category['icon']"
                    :href="route('cours.category', $category['slug'])"
                    :badge="[
                        'text' => $category['lessonsCount'] . ' leçons',
                        'color' => 'bg-blue-100 text-blue-700'
                    ]"
                    type="category"
                />
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500">Aucun cours disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
