@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">

        <!-- En-tête avec retour -->
        <div class="mb-6">
            <a href="{{ route('lessons.index', $course) }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux leçons
            </a>
        </div>

        <!-- Card de la leçon -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">

            <!-- En-tête -->
            <div style="background: linear-gradient(to right, #8b5cf6, #ec4899); padding: 2rem;">
                <div class="flex items-start justify-between">
                    <div class="flex items-center space-x-4">
                        <span style="font-size: 3rem;">
                            {{ $lesson->content_type === 'video' ? '🎥' : '📄' }}
                        </span>
                        <div>
                            <h1 style="font-size: 2rem; font-weight: 700; color: white;">
                                {{ $lesson->title }}
                            </h1>
                            <div class="flex items-center space-x-4 mt-2">
                                <span class="text-purple-100">⏱️ {{ $lesson->duration }} minutes</span>
                                @if($lesson->is_free)
                                    <span class="px-3 py-1 rounded-full text-sm font-semibold"
                                          style="background: rgba(34, 197, 94, 0.2); color: #dcfce7;">
                                        ✅ Accès gratuit
                                    </span>
                                @else
                                    <span class="px-3 py-1 rounded-full text-sm font-semibold"
                                          style="background: rgba(59, 130, 246, 0.2); color: #dbeafe;">
                                        💎 Premium
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex space-x-2">
                            <a href="{{ route('quizzes.index', [$course, $lesson]) }}"
                               class="inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700">
                                📝 Gérer les quiz
                            </a>
                        <a href="{{ route('lessons.edit', [$course, $lesson]) }}"
                           class="px-4 py-2 bg-white text-purple-600 rounded-lg hover:bg-purple-50 font-medium transition">
                            ✏️ Modifier
                        </a>
                        <form action="{{ route('lessons.destroy', [$course, $lesson]) }}" method="POST" class="inline"
                              onsubmit="return confirm('Supprimer cette leçon ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 font-medium transition">
                                🗑️ Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contenu -->
            <div class="p-8">

                <!-- Description -->
                @if($lesson->description)
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">📝 Description</h3>
                        <p class="text-gray-700 leading-relaxed">{{ $lesson->description }}</p>
                    </div>
                @endif

                <!-- Vidéo -->
                @if($lesson->content_type === 'video' && $lesson->video_url)
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">🎥 Vidéo</h3>
                        <div class="relative" style="padding-bottom: 56.25%; height: 0;">
                            <iframe
                                src="{{ $lesson->video_url }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                class="absolute top-0 left-0 w-full h-full rounded-lg"
                            ></iframe>
                        </div>
                    </div>
                @endif

                <!-- Contenu texte -->
                @if($lesson->content)
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">📖 Contenu</h3>
                        <div class="prose max-w-none bg-gray-50 rounded-lg p-6">
                            {!! nl2br(e($lesson->content)) !!}
                        </div>
                    </div>
                @endif

                <!-- Informations supplémentaires -->
                <div class="bg-blue-50 rounded-lg p-6 border border-blue-100">
                    <h3 class="font-semibold text-blue-900 mb-2">ℹ️ Informations</h3>
                    <p class="text-sm text-blue-800">
                        Cette leçon fait partie du cours <strong>{{ $course->title }}</strong>.
                        @if($lesson->is_free)
                            Elle est accessible gratuitement.
                        @else
                            L'accès nécessite l'achat du cours.
                        @endif
                    </p>
                </div>

            </div>

        </div>

    </div>
@endsection
