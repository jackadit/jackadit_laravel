@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12">

        {{-- Breadcrumb --}}
        <nav class="text-sm mb-8">
            <a href="{{ route('home') }}" class="text-primary-600 hover:underline">Accueil</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-600">{{ $intro['title'] }}</span>
        </nav>

        {{-- Contenu introduction --}}
        <div class="bg-white rounded-xl shadow-md p-8 md:p-12 mb-12">
            <article class="prose prose-lg max-w-none">
                {!! $intro['content'] !!}
            </article>
        </div>

        {{-- Liste des leçons --}}
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
                Les leçons
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($lessons as $lessonItem)
                @if(!$lessonItem['isIntro'])
                    <a href="{{ $lessonItem['url'] }}"
                       class="group bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 p-6 border border-gray-200 hover:border-primary-500">

                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center font-bold group-hover:bg-primary-600 group-hover:text-white transition-colors">
                                {{ $lessonItem['number'] }}
                            </div>

                            <div class="ml-4 flex-grow">
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary-600 transition-colors">
                                    {{ $lessonItem['title'] }}
                                </h3>
                            </div>

                            <svg class="w-5 h-5 text-gray-400 group-hover:text-primary-600 group-hover:translate-x-1 transition-all"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>

                    </a>
                @endif
            @endforeach
        </div>

    </div>
@endsection
