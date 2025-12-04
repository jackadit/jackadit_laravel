@extends('layouts.app')

@section('title', $quiz->title)

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- En-tête avec navigation --}}
            <div class="mb-8">
                <a href="{{ route('lessons.show', [$course, $lesson]) }}"
                   class="inline-flex items-center text-gray-600 hover:text-blue-600 transition-colors duration-200 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Retour à la leçon
                </a>

                {{-- Carte en-tête du quiz --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-4xl shadow-lg">
                                📝
                            </div>
                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <h1 class="text-3xl font-bold text-gray-900">{{ $quiz->title }}</h1>
                                    @if($quiz->is_published)
                                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">
                                        ✓ Publié
                                    </span>
                                    @else
                                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">
                                        ✎ Brouillon
                                    </span>
                                    @endif
                                </div>
                                <p class="text-gray-600">{{ $lesson->title }} - {{ $course->title }}</p>
                                @if($quiz->description)
                                    <p class="text-gray-700 mt-2">{{ $quiz->description }}</p>
                                @endif
                            </div>
                        </div>

                        {{-- Boutons d'action (formateur uniquement) --}}

                            <div class="flex items-center gap-3">
                                <a href="{{ route('quizzes.edit', [$course, $lesson, $quiz]) }}"
                                   class="inline-flex items-center px-5 py-3 bg-gradient-to-r from-yellow-500 to-orange-600 text-white font-semibold rounded-xl hover:from-yellow-600 hover:to-orange-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Modifier le quiz
                                </a>
                                <form action="{{ route('quizzes.destroy', [$course, $lesson, $quiz]) }}"
                                      method="POST"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ? Cette action est irréversible.');"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center px-5 py-3 bg-red-600 text-white font-semibold rounded-xl hover:bg-red-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Supprimer
                                    </button>
                                </form>
                            </div>

                    </div>
                </div>
            </div>

            {{-- Informations du quiz --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

                {{-- Score de passage --}}
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Score de passage</p>
                            <p class="text-3xl font-bold text-green-600">{{ $quiz->passing_score }}%</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Temps limite --}}
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Temps limite</p>
                            <p class="text-3xl font-bold text-blue-600">
                                @if($quiz->time_limit)
                                    {{ $quiz->time_limit }} min
                                @else
                                    ∞
                                @endif
                            </p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Tentatives max --}}
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Tentatives max</p>
                            <p class="text-3xl font-bold text-purple-600">
                                @if($quiz->max_attempts)
                                    {{ $quiz->max_attempts }}
                                @else
                                    ∞
                                @endif
                            </p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Nombre de questions --}}
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-orange-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Questions</p>
                            <p class="text-3xl font-bold text-orange-600">{{ $quiz->questions->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Options du quiz --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 mb-8">
                <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                    <div class="w-8 h-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full"></div>
                    Options du quiz
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                    <div class="flex items-center gap-3 p-4 {{ $quiz->show_correct_answers ? 'bg-green-50 border border-green-200' : 'bg-gray-50 border border-gray-200' }} rounded-xl">
                        <div class="w-10 h-10 {{ $quiz->show_correct_answers ? 'bg-green-500' : 'bg-gray-400' }} rounded-full flex items-center justify-center text-white">
                            @if($quiz->show_correct_answers)
                                ✓
                            @else
                                ✗
                            @endif
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Bonnes réponses</p>
                            <p class="text-sm text-gray-600">{{ $quiz->show_correct_answers ? 'Affichées' : 'Masquées' }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 p-4 {{ $quiz->randomize_questions ? 'bg-purple-50 border border-purple-200' : 'bg-gray-50 border border-gray-200' }} rounded-xl">
                        <div class="w-10 h-10 {{ $quiz->randomize_questions ? 'bg-purple-500' : 'bg-gray-400' }} rounded-full flex items-center justify-center text-white">
                            @if($quiz->randomize_questions)
                                ✓
                            @else
                                ✗
                            @endif
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Questions</p>
                            <p class="text-sm text-gray-600">{{ $quiz->randomize_questions ? 'Mélangées' : 'Ordre fixe' }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 p-4 {{ $quiz->randomize_answers ? 'bg-pink-50 border border-pink-200' : 'bg-gray-50 border border-gray-200' }} rounded-xl">
                        <div class="w-10 h-10 {{ $quiz->randomize_answers ? 'bg-pink-500' : 'bg-gray-400' }} rounded-full flex items-center justify-center text-white">
                            @if($quiz->randomize_answers)
                                ✓
                            @else
                                ✗
                            @endif
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Réponses</p>
                            <p class="text-sm text-gray-600">{{ $quiz->randomize_answers ? 'Mélangées' : 'Ordre fixe' }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 p-4 {{ $quiz->is_published ? 'bg-blue-50 border border-blue-200' : 'bg-yellow-50 border border-yellow-200' }} rounded-xl">
                        <div class="w-10 h-10 {{ $quiz->is_published ? 'bg-blue-500' : 'bg-yellow-500' }} rounded-full flex items-center justify-center text-white">
                            {{ $quiz->is_published ? '👁' : '✎' }}
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Statut</p>
                            <p class="text-sm text-gray-600">{{ $quiz->is_published ? 'Publié' : 'Brouillon' }}</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Section Questions --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">

                {{-- En-tête section questions --}}
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                        <div class="w-8 h-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full"></div>
                        Questions ({{ $quiz->questions->count() }})
                    </h2>

                    {{-- Bouton créer question (formateur uniquement) --}}

                        <a href="{{ route('questions.create', [$course, $lesson, $quiz]) }}"
                           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Ajouter une question
                        </a>

                </div>

                {{-- Liste des questions --}}
                @forelse($quiz->questions as $index => $question)
                    <div class="mb-6 last:mb-0">
                        <div class="bg-gradient-to-r from-gray-50 to-white rounded-xl border border-gray-200 p-6 hover:shadow-md transition-all duration-200">

                            {{-- En-tête de la question --}}
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-start gap-4 flex-1">
                                    {{-- Numéro --}}
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0">
                                        {{ $index + 1 }}
                                    </div>

                                    {{-- Texte de la question --}}
                                    <div class="flex-1">
                                        <p class="text-lg font-semibold text-gray-900 mb-2">{{ $question->question_text }}</p>

                                        {{-- Métadonnées --}}
                                        <div class="flex items-center gap-4 text-sm">
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full font-medium">
                                            {{ $question->getQuestionTypeLabel() }}
                                        </span>
                                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full font-medium">
                                            {{ $question->points }} {{ Str::plural('point', $question->points) }}
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Actions (formateur uniquement) --}}

                                    <div class="flex items-center gap-2 ml-4">
                                        <a href="{{ route('questions.edit', [$course, $lesson, $quiz, $question]) }}"
                                           class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg transition-colors duration-200"
                                           title="Modifier">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('questions.destroy', [$course, $lesson, $quiz, $question]) }}"
                                              method="POST"
                                              onsubmit="return confirm('Supprimer cette question ?');"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200"
                                                    title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>

                            </div>

                            {{-- Réponses --}}
                            @if($question->answers && count($question->answers) > 0)
                                <div class="ml-14 space-y-2">
                                    @foreach($question->answers as $answer)
                                        <div class="flex items-center gap-3 p-3 {{ $answer['is_correct'] ? 'bg-green-50 border border-green-200' : 'bg-white border border-gray-200' }} rounded-lg">
                                            @if($answer['is_correct'])
                                                <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                            @else
                                                <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                                </svg>
                                            @endif
                                            <span class="text-gray-700">{{ $answer['text'] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            {{-- Explication --}}
                            @if($question->explanation)
                                <div class="ml-14 mt-4 p-4 bg-blue-50 border-l-4 border-blue-500 rounded-r-lg">
                                    <p class="text-sm font-semibold text-blue-900 mb-1">💡 Explication :</p>
                                    <p class="text-sm text-blue-800">{{ $question->explanation }}</p>
                                </div>
                            @endif

                        </div>
                    </div>
                @empty
                    <div class="text-center py-16">
                        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucune question pour le moment</h3>
                        <p class="text-gray-600 mb-6">Commencez par ajouter votre première question au quiz.</p>


                            <a href="{{ route('questions.create', [$course, $lesson, $quiz]) }}"
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                Créer la première question
                            </a>

                    </div>
                @endforelse

            </div>

        </div>
    </div>
@endsection
