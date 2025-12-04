@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">

        <!-- En-tête avec retour -->
        <div class="mb-6">
            <a href="{{ route('courses.show', $course) }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour au cours
            </a>
        </div>

        <!-- Card principale -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">

            <!-- En-tête avec dégradé -->
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 2rem;">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <span style="font-size: 2.5rem;">📚</span>
                        <div>
                            <h1 class="text-3xl font-bold text-white">
                                Leçons du cours
                            </h1>
                            <p class="text-purple-100 mt-1">
                                {{ $course->title }}
                            </p>
                        </div>
                    </div>

                    <!-- Bouton nouvelle leçon -->
                    <a href="{{ route('lessons.create', $course) }}"
                       class="bg-white text-purple-700 px-6 py-3 rounded-lg font-semibold hover:bg-purple-50 transition-all shadow-md hover:shadow-lg">
                        ➕ Nouvelle leçon
                    </a>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 bg-gray-50 border-b">
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600">{{ $lessons->count() }}</div>
                    <div class="text-sm text-gray-600">Total leçons</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600">{{ $lessons->where('is_published', true)->count() }}</div>
                    <div class="text-sm text-gray-600">Publiées</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600">{{ $lessons->where('is_free', true)->count() }}</div>
                    <div class="text-sm text-gray-600">Gratuites</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-gray-600">{{ $lessons->sum('duration') }} min</div>
                    <div class="text-sm text-gray-600">Durée totale</div>
                </div>
            </div>

            <!-- Liste des leçons -->
            <div class="p-6">
                @if($lessons->isEmpty())
                    <!-- État vide -->
                    <div class="text-center py-16">
                        <div class="text-6xl mb-4">📭</div>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">
                            Aucune leçon pour le moment
                        </h3>
                        <p class="text-gray-500 mb-6">
                            Commencez par créer votre première leçon
                        </p>
                        <a href="{{ route('lessons.create', $course) }}"
                           class="inline-block px-8 py-3 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all"
                           style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            ➕ Créer la première leçon
                        </a>
                    </div>
                @else
                    <!-- Tableau des leçons -->
                    <div class="space-y-3">
                        @foreach($lessons as $lesson)
                            <!-- 🧪 DEBUG TEMPORAIRE (À L'INTÉRIEUR DE LA BOUCLE) -->
                            <div class="bg-yellow-100 p-2 mb-2 text-xs">
                                <strong>Debug :</strong>
                                Course: {{ $course->id }} |
                                Lesson: {{ $lesson->id }} |
                                URL: {{ route('quizzes.index', [$course, $lesson]) }}
                            </div>
                            <!-- FIN DEBUG -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-all {{ !$lesson->is_published ? 'bg-gray-50' : 'bg-white' }}">
                                <div class="flex items-start justify-between">

                                    <!-- Informations principales -->
                                    <div class="flex items-start space-x-4 flex-1">

                                        <!-- Numéro d'ordre -->
                                        <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center font-bold text-white"
                                             style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                            {{ $lesson->order }}
                                        </div>

                                        <!-- Contenu -->
                                        <div class="flex-1">
                                            <!-- Titre + Type -->
                                            <div class="flex items-center space-x-2 mb-2">
                                                <h3 class="text-lg font-semibold text-gray-800">
                                                    {{ $lesson->title }}
                                                </h3>

                                                <!-- Badge type de contenu -->
                                                @if($lesson->content_type === 'video')
                                                    <span class="px-2 py-1 bg-red-100 text-red-700 text-xs font-medium rounded">
                                                        🎥 Vidéo
                                                    </span>
                                                @else
                                                    <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded">
                                                        📄 Texte
                                                    </span>
                                                @endif
                                            </div>

                                            <!-- Description -->
                                            @if($lesson->description)
                                                <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                                                    {{ $lesson->description }}
                                                </p>
                                            @endif

                                            <!-- Badges et métadonnées -->
                                            <div class="flex items-center flex-wrap gap-2">

                                                <!-- Durée -->
                                                <span class="inline-flex items-center px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">
                                                    ⏱️ {{ $lesson->duration }} min
                                                </span>

                                                <!-- AJOUT : Nombre de quiz -->
                                                <span class="inline-flex items-center px-3 py-1 bg-purple-100 text-purple-700 text-xs font-medium rounded-full">
                                                    📝 {{ $lesson->quizzes->count() }} quiz
                                                </span>

                                                <!-- Badge GRATUIT -->
                                                @if($lesson->is_free)
                                                    <span class="inline-flex items-center px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">
                                                        🎁 GRATUIT
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-medium rounded-full">
                                                        🔒 Payant
                                                    </span>
                                                @endif

                                                <!-- Badge PUBLIÉ / BROUILLON -->
                                                @if($lesson->is_published)
                                                    <span class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-full">
                                                        ✅ PUBLIÉ
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center px-3 py-1 bg-gray-200 text-gray-600 text-xs font-medium rounded-full">
                                                        📝 Brouillon
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex items-center space-x-2 ml-4">

                                        <!-- Gérer les quiz -->
                                        <a href="/courses/{{ $course->id }}/lessons/{{ $lesson->id }}/quizzes"
                                           class="p-2 bg-purple-100 text-purple-600 rounded-lg hover:bg-purple-200 transition-colors"
                                           title="Gérer les quiz">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                            </svg>
                                        </a>

                                        <!-- Voir -->
                                        <a href="{{ route('lessons.show', [$course, $lesson]) }}"
                                           class="p-2 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition-colors"
                                           title="Voir la leçon">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </a>

                                        <!-- Modifier -->
                                        <a href="{{ route('lessons.edit', [$course, $lesson]) }}"
                                           class="p-2 bg-yellow-100 text-yellow-600 rounded-lg hover:bg-yellow-200 transition-colors"
                                           title="Modifier">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>

                                        <!-- Supprimer -->
                                        <form action="{{ route('lessons.destroy', [$course, $lesson]) }}"
                                              method="POST"
                                              onsubmit="return confirm('Voulez-vous vraiment supprimer cette leçon ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="p-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition-colors"
                                                    title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>

    </div>
@endsection
