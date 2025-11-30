@extends('layouts.app')

@php
    $pageTitle = $category['slug'];
    $metaDescription = $category['description'];
@endphp

@section('content')

    {{-- Header catégorie --}}
    <div class="py-12 bg-gradient-to-br from-blue-50 to-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center space-x-4 mb-4">
                <span class="text-5xl">{{ $category['icon'] }}</span>
                <h1 class="text-4xl font-bold text-gray-900">
                    {{ $category['title'] }}
                </h1>
            </div>
            <p class="text-xl text-gray-600 text-center max-w-2xl mx-auto">
                {{ $category['description'] }}
            </p>
        </div>
    </div>

    {{-- Liste des cours --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if(count($category['cours']) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($category['cours'] as $cours)
                        <x-card
                            :title="$cours['title']"
                            :description="$cours['description']"
                            :href="route('cours.show', ['category' => $category['slug'], 'slug' => $cours['slug']])"
                            :badge="[
                            'text' => ucfirst($cours['difficulty']),
                            'color' => $cours['difficulty'] === 'débutant'
                                ? 'bg-green-100 text-green-700'
                                : ($cours['difficulty'] === 'intermédiaire'
                                    ? 'bg-yellow-100 text-yellow-700'
                                    : 'bg-red-100 text-red-700')
                        ]"
                            :stats="[
                            'lessons' => count($cours['lessons']) . ' leçons',
                            'duration' => $cours['duration'],
                            'level' => ucfirst($cours['difficulty'])
                        ]"
                            :difficulty="$cours['difficulty'] === 'débutant' ? 1 : ($cours['difficulty'] === 'intermédiaire' ? 2 : 3)"
                            type="lesson"
                        >
                            <x-slot:icon>
                                <span class="text-2xl">{{ $category['icon'] }}</span>
                            </x-slot:icon>
                        </x-card>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <span class="text-6xl mb-4 block">📭</span>
                    <p class="text-xl text-gray-600">Aucun cours disponible dans cette catégorie</p>
                </div>
            @endif

            {{-- Lien retour --}}
            <div class="text-center mt-12">
                <a href="{{ route('cours.index') }}"
                   class="inline-flex items-center space-x-2 text-blue-600 hover:text-blue-700 font-semibold transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span>Retour aux cours</span>
                </a>
            </div>

        </div>
    </section>

@endsection
