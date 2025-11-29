@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12">

        {{-- Hero section --}}
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">
                Apprenez le développement web
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Des cours complets et progressifs pour maîtriser PHP, MySQL, l'accessibilité et bien plus encore.
            </p>
        </div>

        {{-- Grille des catégories --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categories as $category)
                <a href="{{ route('cours.category', $category['slug']) }}"
                   class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200 hover:border-primary-500">

                    <div class="p-8">
                        <div class="text-5xl mb-4">{{ $category['icon'] }}</div>

                        <h2 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors">
                            {{ $category['title'] }}
                        </h2>

                        @if($category['description'])
                            <p class="text-gray-600 mb-4">
                                {{ $category['description'] }}
                            </p>
                        @endif

                        <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">
                        {{ $category['lessonsCount'] }} leçon{{ $category['lessonsCount'] > 1 ? 's' : '' }}
                    </span>
                            <span class="text-primary-600 font-semibold group-hover:translate-x-1 transition-transform">
                        Commencer →
                    </span>
                        </div>
                    </div>

                </a>
            @endforeach
        </div>

    </div>
@endsection
