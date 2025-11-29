@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12">

        {{-- Breadcrumb --}}
        <nav class="text-sm mb-8">
            <a href="{{ route('home') }}" class="text-primary-600 hover:underline">Accueil</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="{{ route('cours.category', $category) }}" class="text-primary-600 hover:underline">
                {{ ucfirst($category) }}
            </a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-600">Leçon {{ $lesson['lesson'] }}</span>
        </nav>

        {{-- Contenu de la leçon --}}
        <div class="bg-white rounded-xl shadow-md p-8 md:p-12 mb-12">
            <article class="prose prose-lg max-w-none">
                {!! $lesson['content'] !!}
            </article>
        </div>

        {{-- Navigation précédent/suivant --}}
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-12 pt-8 border-t border-gray-200">

            @if($navigation['prev'])
                <a href="{{ $navigation['prev']['url'] }}"
                   class="btn-secondary w-full sm:w-auto group">
                    <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    <div class="text-left">
                        <div class="text-xs text-gray-500">Précédent</div>
                        <div class="font-semibold">{{ $navigation['prev']['title'] }}</div>
                    </div>
                </a>
            @else
                <div class="w-full sm:w-auto"></div>
            @endif

            <a href="{{ route('cours.category', $category) }}"
               class="text-primary-600 hover:text-primary-700 font-medium">
                📚 Voir tous les cours
            </a>

            @if($navigation['next'])
                <a href="{{ $navigation['next']['url'] }}"
                   class="btn-primary w-full sm:w-auto group">
                    <div class="text-right">
                        <div class="text-xs text-primary-100">Suivant</div>
                        <div class="font-semibold">{{ $navigation['next']['title'] }}</div>
                    </div>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            @else
                <div class="w-full sm:w-auto"></div>
            @endif

        </div>

        {{-- Liste des leçons (sidebar mobile) --}}
        <details class="bg-gray-50 rounded-lg p-6">
            <summary class="cursor-pointer font-semibold text-gray-900 mb-4">
                📖 Toutes les leçons ({{ count($navigation['all']) }})
            </summary>

            <ul class="space-y-2">
                @foreach($navigation['all'] as $item)
                    @if(!$item['isIntro'])
                        <li>
                            <a href="{{ $item['url'] }}"
                               class="flex items-center p-3 rounded-lg transition-colors {{ $item['number'] === $navigation['current'] ? 'bg-primary-100 text-primary-700 font-semibold' : 'hover:bg-gray-100' }}">
                        <span class="w-8 h-8 bg-white rounded-full flex items-center justify-center text-sm font-bold mr-3 {{ $item['number'] === $navigation['current'] ? 'bg-primary-600 text-white' : 'text-gray-600' }}">
                            {{ $item['number'] }}
                        </span>
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </details>

    </div>
@endsection
