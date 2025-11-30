@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        {{-- En-tête --}}
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">
                        {{ $quiz->title }}
                    </h1>
                    <p class="text-gray-600">
                        Leçon :
                        <a href="{{ route('courses.lessons.show', [$course, $lesson]) }}"
                           class="text-blue-600 hover:underline">
                            {{ $lesson->title }}
                        </a>
                    </p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('courses.lessons.quizzes.index', [$course, $lesson]) }}"
                       class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        ← Retour aux quiz
                    </a>

                    @can('update', $course)
                        <a href="{{ route('courses.lessons.quizzes.edit', [$course, $lesson, $quiz]) }}"
                           class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            ✏️ Modifier
                        </a>
                    @endcan
                </div>
            </div>
        </div>

        {{-- Messages de succès --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                ✅ {{ session('success') }}
            </div>
        @endif

        {{-- Informations du quiz --}}
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">📋 Informations du quiz</h2>

            @if($quiz->description)
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Description</h3>
                    <p class="text-gray-600">{{ $quiz->description }}</p>
                </div>
            @endif

            <div class="grid md:grid-cols-4 gap-4">
                <div class="bg-blue-50 p-4 rounded text-center">
                    <p class="text-gray-600 text-sm mb-1">⏱️ Temps limite</p>
                    <p class="text-2xl font-bold text-gray-800">
                        {{ $quiz->time_limit ? $quiz->time_limit . ' min' : '∞' }}
                    </p>
                </div>

                <div class="bg-green-50 p-4 rounded text-center">
                    <p class="text-gray-600 text-sm mb-1">🎯 Score minimum</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $quiz->passing_score }}%</p>
                </div>

                <div class="bg-purple-50 p-4 rounded text-center">
                    <p class="text-gray-600 text-sm mb-1">🔄 Tentatives max</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $quiz->max_attempts }}</p>
                </div>

                <div class="bg-orange-50 p-4 rounded text-center">
                    <p class="text-gray-600 text-sm mb-1">📝 Questions</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $quiz->questions->count() }}</p>
                </div>
            </div>
        </div>

        {{-- Liste des questions --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">❓ Questions du quiz</h2>

                @can('update', $course)
                    <a href="{{ route('courses.lessons.quizzes.questions.create', [$course, $lesson, $quiz]) }}"
                       class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        ➕ Ajouter une question
                    </a>
                @endcan
            </div>

            @if($quiz->questions->isEmpty())
                <div class="text-center py-16">
                    <div class="text-6xl mb-4">📭</div>
                    <p class="text-xl text-gray-600 mb-2">Aucune question pour le moment</p>
                    <p class="text-sm text-gray-500 mb-6">Cliquez sur "Ajouter une question" pour commencer</p>

                    @can('update', $course)
                        <a href="{{ route('courses.lessons.quizzes.questions.create', [$course, $lesson, $quiz]) }}"
                           class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded inline-block">
                            ➕ Créer la première question
                        </a>
                    @endcan
                </div>
            @else
                <div class="space-y-6">
                    @foreach($quiz->questions as $index => $question)
                        <div class="border-2 border-gray-200 rounded-lg p-6 hover:border-blue-300 transition-colors">

                            {{-- En-tête de la question --}}
                            <div class="flex justify-between items-start mb-4">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-3">
                                    <span class="bg-blue-500 text-white text-sm font-bold px-3 py-1 rounded">
                                        Question {{ $index + 1 }}
                                    </span>
                                        <span class="bg-gray-200 text-gray-800 text-sm font-semibold px-3 py-1 rounded">
                                        {{ ucfirst(str_replace('_', ' ', $question->question_type)) }}
                                    </span>
                                        <div class="flex items-center gap-2">
                                            <span class="text-gray-600 text-sm">{{ $question->points }} pts</span>

                                            {{-- Bouton Éditer --}}
                                            <a href="{{ route('questions.edit', [$course, $lesson, $quiz, $question]) }}"
                                               class="px-3 py-1 bg-blue-500 text-white text-xs rounded hover:bg-blue-600 transition">
                                                ✏️ Éditer
                                            </a>

                                            {{-- Bouton Supprimer (on l'ajoutera après) --}}
                                            <form action="{{ route('questions.destroy', [$course, $lesson, $quiz, $question]) }}"
                                                  method="POST"
                                                  class="inline"
                                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette question ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="px-3 py-1 bg-red-500 text-white text-xs rounded hover:bg-red-600 transition">
                                                    🗑️ Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- Texte de la question --}}
                                    <p class="text-lg text-gray-900 font-semibold mb-4">
                                        {{ $question->question_text }}
                                    </p>

                                    {{-- Réponses --}}
                                    <div class="ml-4 space-y-2">
                                        @foreach($question->answers as $answerIndex => $answer)
                                            <div class="flex items-start gap-3 p-3 rounded {{ $answer->is_correct ? 'bg-green-50 border-l-4 border-green-500' : 'bg-gray-50' }}">
                                            <span class="font-bold text-gray-600 mt-0.5">
                                                {{ chr(65 + $answerIndex) }}.
                                            </span>

                                                @if($answer->is_correct)
                                                    <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-green-800 font-semibold flex-1">
                                                    {{ $answer->answer_text }}
                                                    <span class="text-xs ml-2">(✓ Bonne réponse)</span>
                                                </span>
                                                @else
                                                    <svg class="w-6 h-6 text-gray-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 000 2h4a1 1 0 100-2H8z" clip-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-gray-700 flex-1">{{ $answer->answer_text }}</span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- Explication --}}
                                    @if($question->explanation)
                                        <div class="mt-4 text-sm bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
                                            <p class="font-semibold text-blue-900 mb-1">💡 Explication :</p>
                                            <p class="text-blue-800">{{ $question->explanation }}</p>
                                        </div>
                                    @endif
                                </div>

                                {{-- Boutons d'action --}}
                                @can('update', $course)
                                    <div class="flex gap-2 ml-4">
                                        <a href="{{ route('courses.lessons.quizzes.questions.edit', [$course, $lesson, $quiz, $question]) }}"
                                           class="text-blue-600 hover:text-blue-900 p-2 hover:bg-blue-50 rounded"
                                           title="Modifier">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>

                                        <form method="POST"
                                              action="{{ route('courses.lessons.quizzes.questions.destroy', [$course, $lesson, $quiz, $question]) }}"
                                              onsubmit="return confirm('⚠️ Supprimer cette question et toutes ses réponses ?')"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="text-red-600 hover:text-red-900 p-2 hover:bg-red-50 rounded"
                                                    title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1-1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Statistiques finales --}}
                <div class="mt-8 grid md:grid-cols-3 gap-4 bg-gray-50 p-6 rounded-lg">
                    <div class="text-center">
                        <p class="text-gray-600 text-sm mb-1">Total questions</p>
                        <p class="text-3xl font-bold text-gray-800">{{ $quiz->questions->count() }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 text-sm mb-1">Total points</p>
                        <p class="text-3xl font-bold text-gray-800">{{ $quiz->questions->sum('points') }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 text-sm mb-1">Durée estimée</p>
                        <p class="text-3xl font-bold text-gray-800">
                            {{ $quiz->time_limit ?? ceil($quiz->questions->count() * 1.5) }} min
                        </p>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
