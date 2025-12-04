@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">

        <!-- En-tête avec retour -->
        <div class="mb-6">
            <a href="{{ route('courses.index') }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux cours
            </a>
        </div>

        <!-- Card du cours -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">

            <!-- En-tête coloré -->
            <div style="background: linear-gradient(to right, #8b5cf6, #ec4899); padding: 2rem;">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-center space-x-3 mb-3">
                            <span style="font-size: 3rem;">📚</span>
                            <div>
                                <h1 style="font-size: 2rem; font-weight: 700; color: white;">
                                    {{ $course->title }}
                                </h1>
                                <div class="flex items-center space-x-4 mt-2">
                                    @if($course->is_published)
                                        <span class="px-3 py-1 rounded-full text-sm font-semibold"
                                              style="background: rgba(34, 197, 94, 0.2); color: #dcfce7; border: 1px solid rgba(34, 197, 94, 0.3);">
                                            ✅ Publié
                                        </span>
                                    @else
                                        <span class="px-3 py-1 rounded-full text-sm font-semibold"
                                              style="background: rgba(251, 191, 36, 0.2); color: #fef3c7; border: 1px solid rgba(251, 191, 36, 0.3);">
                                            ⏳ Brouillon
                                        </span>
                                    @endif
                                    <span class="text-purple-100 text-sm">
                                        Niveau : <strong class="text-white">{{ ucfirst($course->difficulty_level) }}</strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex space-x-2">
                        <a href="{{ route('courses.edit', $course) }}"
                           class="px-4 py-2 bg-white text-purple-600 rounded-lg hover:bg-purple-50 font-medium transition">
                            ✏️ Modifier
                        </a>
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" class="inline"
                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?');">
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

            <!-- Contenu du cours -->
            <div class="p-6">

                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">📝 Description</h3>
                    <p class="text-gray-700 leading-relaxed">{{ $course->description }}</p>
                </div>

                <!-- Statistiques -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-blue-50 rounded-lg p-4 border border-blue-100">
                        <div class="flex items-center space-x-3">
                            <div class="text-3xl">📖</div>
                            <div>
                                <p class="text-sm text-blue-600 font-medium">Leçons</p>
                                <p class="text-2xl font-bold text-blue-900">{{ $course->lessons->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-green-50 rounded-lg p-4 border border-green-100">
                        <div class="flex items-center space-x-3">
                            <div class="text-3xl">👥</div>
                            <div>
                                <p class="text-sm text-green-600 font-medium">Inscrits</p>
                                <p class="text-2xl font-bold text-green-900">0</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-purple-50 rounded-lg p-4 border border-purple-100">
                        <div class="flex items-center space-x-3">
                            <div class="text-3xl">⏱️</div>
                            <div>
                                <p class="text-sm text-purple-600 font-medium">Durée totale</p>
                                <p class="text-2xl font-bold text-purple-900">{{ $course->lessons->sum('duration') }} min</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Section des leçons -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">

            <!-- En-tête des leçons -->
            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 px-6 py-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white flex items-center space-x-2">
                        <span>📚</span>
                        <span>Leçons du cours</span>
                    </h2>
                    <a href="{{ route('lessons.create', $course) }}"
                       class="px-4 py-2 bg-white text-blue-600 rounded-lg hover:bg-blue-50 font-medium transition">
                        ➕ Nouvelle leçon
                    </a>
                </div>
            </div>

            <!-- Liste des leçons -->
            <div class="p-6">
                @forelse($course->lessons as $index => $lesson)
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition mb-3">

                        <div class="flex items-center space-x-4 flex-1">
                            <!-- Numéro -->
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold">
                                {{ $index + 1 }}
                            </div>

                            <!-- Infos -->
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900">{{ $lesson->title }}</h3>
                                <div class="flex items-center space-x-3 mt-1">
                                    <span class="text-sm text-gray-600">⏱️ {{ $lesson->duration }} min</span>
                                    <span class="text-sm text-gray-600">
                                        {{ $lesson->content_type === 'video' ? '🎥 Vidéo' : '📄 Texte' }}
                                    </span>
                                    @if($lesson->is_free)
                                        <span class="px-2 py-0.5 bg-green-100 text-green-700 text-xs rounded-full font-medium">
                                            ✅ Gratuit
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex space-x-2">
                            <a href="{{ route('lessons.show', [$course, $lesson]) }}"
                               class="px-3 py-1.5 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm font-medium transition">
                                👁️ Voir
                            </a>
                            <a href="{{ route('lessons.edit', [$course, $lesson]) }}"
                               class="px-3 py-1.5 bg-gray-500 text-white rounded hover:bg-gray-600 text-sm font-medium transition">
                                ✏️ Modifier
                            </a>
                            <form action="{{ route('lessons.destroy', [$course, $lesson]) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Supprimer cette leçon ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="px-3 py-1.5 bg-red-500 text-white rounded hover:bg-red-600 text-sm font-medium transition">
                                    🗑️
                                </button>
                            </form>
                        </div>

                    </div>
                @empty
                    <div class="text-center py-12">
                        <div class="text-6xl mb-4">📭</div>
                        <p class="text-gray-600 mb-4">Aucune leçon pour le moment</p>
                        <a href="{{ route('lessons.create', $course) }}"
                           class="inline-flex items-center px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium transition">
                            ➕ Créer la première leçon
                        </a>
                    </div>
                @endforelse
            </div>

        </div>

    </div>
@endsection
