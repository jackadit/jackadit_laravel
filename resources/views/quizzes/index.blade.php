@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        {{-- En-tête --}}
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">
                        📝 Quiz de la leçon : {{ $lesson->title }}
                    </h1>
                    <p class="text-gray-600">
                        Cours : <a href="{{ route('courses.show', $course) }}" class="text-blue-600 hover:underline">{{ $course->title }}</a>
                    </p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('courses.lessons.show', [$course, $lesson]) }}"
                       class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        ← Retour à la leçon
                    </a>

                    @can('update', $course)
                        <a href="{{ route('courses.lessons.quizzes.create', [$course, $lesson]) }}"
                           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            ➕ Nouveau quiz
                        </a>
                    @endcan
                </div>
            </div>
        </div>

        {{-- Messages de succès --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                ✅ {{ session('success') }}
            </div>
        @endif

        {{-- Statistiques --}}
        <div class="grid md:grid-cols-3 gap-4 mb-8">
            <div class="bg-blue-50 p-6 rounded-lg text-center">
                <p class="text-3xl font-bold text-blue-600">{{ $quizzes->count() }}</p>
                <p class="text-gray-600 mt-2">Quiz disponibles</p>
            </div>
            <div class="bg-green-50 p-6 rounded-lg text-center">
                <p class="text-3xl font-bold text-green-600">{{ $quizzes->sum('questions_count') }}</p>
                <p class="text-gray-600 mt-2">Questions totales</p>
            </div>
            <div class="bg-purple-50 p-6 rounded-lg text-center">
                <p class="text-3xl font-bold text-purple-600">
                    {{ $quizzes->avg('passing_score') ? round($quizzes->avg('passing_score')) : 0 }}%
                </p>
                <p class="text-gray-600 mt-2">Score moyen requis</p>
            </div>
        </div>

        {{-- Liste des quiz --}}
        @if($quizzes->count() > 0)
            <div class="space-y-6">
                @foreach($quizzes as $quiz)
                    <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition-shadow">

                        {{-- En-tête du quiz --}}
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">
                                    {{ $quiz->title }}
                                </h3>
                                @if($quiz->description)
                                    <p class="text-gray-600 mb-3">{{ $quiz->description }}</p>
                                @endif
                            </div>
                        </div>

                        {{-- Informations du quiz --}}
                        <div class="grid md:grid-cols-4 gap-4 mb-6">
                            <div class="bg-gray-50 p-4 rounded text-center">
                                <p class="text-gray-600 text-sm mb-1">📊 Questions</p>
                                <p class="text-2xl font-bold text-gray-800">{{ $quiz->questions_count }}</p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded text-center">
                                <p class="text-gray-600 text-sm mb-1">🎯 Score requis</p>
                                <p class="text-2xl font-bold text-gray-800">{{ $quiz->passing_score }}%</p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded text-center">
                                <p class="text-gray-600 text-sm mb-1">🔄 Tentatives</p>
                                <p class="text-2xl font-bold text-gray-800">{{ $quiz->max_attempts }}</p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded text-center">
                                <p class="text-gray-600 text-sm mb-1">⏱️ Temps</p>
                                <p class="text-2xl font-bold text-gray-800">
                                    {{ $quiz->time_limit ? $quiz->time_limit . ' min' : '∞' }}
                                </p>
                            </div>
                        </div>

                        {{-- Actions --}}
                        <div class="flex flex-wrap gap-3">
                            {{-- Bouton Voir --}}
                            <a href="{{ route('courses.lessons.quizzes.show', [$course, $lesson, $quiz]) }}"
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded flex-1 text-center min-w-[150px]">
                                👁️ Voir le quiz
                            </a>

                            @can('update', $course)
                                {{-- Bouton Modifier --}}
                                <a href="{{ route('courses.lessons.quizzes.edit', [$course, $lesson, $quiz]) }}"
                                   class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-3 px-6 rounded">
                                    ✏️ Modifier
                                </a>

                                {{-- Bouton Supprimer --}}
                                <form action="{{ route('courses.lessons.quizzes.destroy', [$course, $lesson, $quiz]) }}"
                                      method="POST"
                                      onsubmit="return confirm('⚠️ Supprimer ce quiz et toutes ses questions ?')"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded">
                                        🗑️ Supprimer
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>

        @else
            {{-- Aucun quiz --}}
            <div class="bg-white rounded-lg shadow-md p-16 text-center">
                <div class="text-6xl mb-4">📭</div>
                <p class="text-xl text-gray-600 mb-6">Aucun quiz disponible pour cette leçon</p>

                @can('update', $course)
                    <a href="{{ route('courses.lessons.quizzes.create', [$course, $lesson]) }}"
                       class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded inline-block">
                        ➕ Créer le premier quiz
                    </a>
                @endcan
            </div>
        @endif

    </div>
@endsection
