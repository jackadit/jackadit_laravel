@extends('layouts.app')

@section('title', 'Quiz - ' . $lesson->title)

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Breadcrumb --}}
            <nav class="flex mb-6 text-sm" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-blue-600">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('courses.show', $course) }}" class="flex items-center text-gray-600 hover:text-blue-600">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ Str::limit($course->title, 30) }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('lessons.show', [$course, $lesson]) }}" class="flex items-center text-gray-600 hover:text-blue-600">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ Str::limit($lesson->title, 30) }}
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-500">Quiz</span>
                        </div>
                    </li>
                </ol>
            </nav>

            {{-- Header --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8 border border-gray-100">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-3 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900">Quiz de la leçon</h1>
                                <p class="text-gray-600 mt-1">{{ $lesson->title }}</p>
                            </div>
                        </div>

                        @if($lesson->description)
                            <p class="text-gray-700 leading-relaxed">{{ $lesson->description }}</p>
                        @endif
                    </div>

                    @can('update', $course)
                        <a href="{{ route('quizzes.create', [$course, $lesson]) }}"
                           class="ml-4 inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Nouveau Quiz
                        </a>
                    @endcan
                </div>
            </div>

            {{-- Liste des Quiz --}}
            @if($quizzes->count() > 0)
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($quizzes as $quiz)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden group">
                            {{-- Header coloré --}}
                            <div class="h-2 bg-gradient-to-r from-purple-500 via-pink-500 to-red-500"></div>

                            <div class="p-6">
                                {{-- Titre et statut --}}
                                <div class="flex items-start justify-between mb-4">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-purple-600 transition-colors">
                                        {{ $quiz->title }}
                                    </h3>
                                    @if($quiz->is_active)
                                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">
                            Actif
                        </span>
                                    @else
                                        <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">
                            Inactif
                        </span>
                                    @endif
                                </div>

                                {{-- Description --}}
                                @if($quiz->description)
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                        {{ $quiz->description }}
                                    </p>
                                @endif

                                {{-- Statistiques --}}
                                <div class="grid grid-cols-2 gap-4 mb-6">
                                    <div class="bg-blue-50 rounded-lg p-3">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <p class="text-xs text-gray-600">Questions</p>
                                                <p class="text-lg font-bold text-gray-900">{{ $quiz->questions->count() }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 rounded-lg p-3">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <div>
                                                <p class="text-xs text-gray-600">Score min.</p>
                                                <p class="text-lg font-bold text-gray-900">{{ $quiz->passing_score }}%</p>
                                            </div>
                                        </div>
                                    </div>

                                    @if($quiz->time_limit)
                                        <div class="bg-orange-50 rounded-lg p-3">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <div>
                                                    <p class="text-xs text-gray-600">Durée</p>
                                                    <p class="text-lg font-bold text-gray-900">{{ $quiz->time_limit }} min</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($quiz->max_attempts)
                                        <div class="bg-purple-50 rounded-lg p-3">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                                </svg>
                                                <div>
                                                    <p class="text-xs text-gray-600">Tentatives</p>
                                                    <p class="text-lg font-bold text-gray-900">{{ $quiz->max_attempts }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                {{-- Actions --}}
                                <div class="flex gap-2">
                                    <a href="{{ route('quizzes.show', [$course, $lesson, $quiz]) }}"
                                       class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-md hover:shadow-lg">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        Voir
                                    </a>

                                    @can('update', $course)
                                        <a href="{{ route('quizzes.edit', [$course, $lesson, $quiz]) }}"
                                           class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition-all duration-200">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                {{-- Aucun quiz --}}
                <div class="bg-white rounded-2xl shadow-lg p-12 text-center border border-gray-100">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full mb-6">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Aucun quiz disponible</h3>
                    <p class="text-gray-600 mb-6">Cette leçon ne contient pas encore de quiz.</p>

                    @can('update', $course)
                        <a href="{{ route('quizzes.create', [$course, $lesson]) }}"
                           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Créer le premier quiz
                        </a>
                    @endcan
                </div>
            @endif

        </div>
    </div>
@endsection
