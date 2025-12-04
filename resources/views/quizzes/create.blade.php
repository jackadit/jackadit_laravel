@extends('layouts.app')

@section('title', 'Créer un quiz - ' . $lesson->title)

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 py-8">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- En-tête --}}
            <div class="mb-8">
                <a href="{{ route('courses.lessons.quizzes.index', [$course, $lesson]) }}"
                   class="inline-flex items-center text-gray-600 hover:text-blue-600 transition-colors duration-200 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Retour aux quiz
                </a>

                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-3xl shadow-lg">
                            📝
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900">Créer un quiz</h1>
                            <p class="text-gray-600 mt-1">Leçon : {{ $lesson->title }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Formulaire --}}
            <form action="{{ route('courses.lessons.quizzes.store', [$course, $lesson]) }}"
                  method="POST"
                  class="space-y-6">
                @csrf

                {{-- Informations de base --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                        <div class="w-8 h-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full"></div>
                        Informations de base
                    </h2>

                    <div class="space-y-6">

                        {{-- Titre --}}
                        <div>
                            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                                Titre du quiz <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   id="title"
                                   name="title"
                                   value="{{ old('title') }}"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('title') border-red-500 @enderror"
                                   placeholder="Ex: Quiz final - Module 1">
                            @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div>
                            <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                                Description
                            </label>
                            <textarea id="description"
                                      name="description"
                                      rows="4"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('description') border-red-500 @enderror"
                                      placeholder="Décrivez brièvement ce quiz...">{{ old('description') }}</textarea>
                            @error('description')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Paramètres --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                        <div class="w-8 h-1 bg-gradient-to-r from-green-600 to-teal-600 rounded-full"></div>
                        Paramètres
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                        {{-- Score de passage --}}
                        <div>
                            <label for="passing_score" class="block text-sm font-semibold text-gray-700 mb-2">
                                Score de passage (%) <span class="text-red-500">*</span>
                            </label>
                            <input type="number"
                                   id="passing_score"
                                   name="passing_score"
                                   value="{{ old('passing_score', 70) }}"
                                   min="0"
                                   max="100"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 @error('passing_score') border-red-500 @enderror"
                                   placeholder="70">
                            @error('passing_score')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Temps limite --}}
                        <div>
                            <label for="time_limit" class="block text-sm font-semibold text-gray-700 mb-2">
                                Temps limite (minutes)
                            </label>
                            <input type="number"
                                   id="time_limit"
                                   name="time_limit"
                                   value="{{ old('time_limit') }}"
                                   min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 @error('time_limit') border-red-500 @enderror"
                                   placeholder="30">
                            <p class="mt-1 text-xs text-gray-500">Laissez vide pour pas de limite</p>
                            @error('time_limit')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tentatives max --}}
                        <div>
                            <label for="max_attempts" class="block text-sm font-semibold text-gray-700 mb-2">
                                Tentatives max
                            </label>
                            <input type="number"
                                   id="max_attempts"
                                   name="max_attempts"
                                   value="{{ old('max_attempts') }}"
                                   min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 @error('max_attempts') border-red-500 @enderror"
                                   placeholder="3">
                            <p class="mt-1 text-xs text-gray-500">Laissez vide pour illimité</p>
                            @error('max_attempts')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Options du quiz --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                        <div class="w-8 h-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full"></div>
                        Options du quiz
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        {{-- Publié --}}
                        <div class="relative flex items-start p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl border border-blue-200 hover:shadow-md transition-all duration-200">
                            <div class="flex items-center h-5">
                                <input type="hidden" name="is_published" value="0">
                                <input type="checkbox"
                                       id="is_published"
                                       name="is_published"
                                       value="1"
                                       {{ old('is_published', true) ? 'checked' : '' }}
                                       class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-500 cursor-pointer">
                            </div>
                            <div class="ml-3">
                                <label for="is_published" class="font-semibold text-gray-900 cursor-pointer">
                                    Publier le quiz
                                </label>
                                <p class="text-sm text-gray-600">Le quiz sera visible par les étudiants</p>
                            </div>
                        </div>

                        {{-- Afficher les bonnes réponses --}}
                        <div class="relative flex items-start p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl border border-green-200 hover:shadow-md transition-all duration-200">
                            <div class="flex items-center h-5">
                                <input type="hidden" name="show_correct_answers" value="0">
                                <input type="checkbox"
                                       id="show_correct_answers"
                                       name="show_correct_answers"
                                       value="1"
                                       {{ old('show_correct_answers', true) ? 'checked' : '' }}
                                       class="w-5 h-5 text-green-600 rounded focus:ring-2 focus:ring-green-500 cursor-pointer">
                            </div>
                            <div class="ml-3">
                                <label for="show_correct_answers" class="font-semibold text-gray-900 cursor-pointer">
                                    Afficher les bonnes réponses
                                </label>
                                <p class="text-sm text-gray-600">Après la soumission du quiz</p>
                            </div>
                        </div>

                        {{-- Mélanger les questions --}}
                        <div class="relative flex items-start p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl border border-purple-200 hover:shadow-md transition-all duration-200">
                            <div class="flex items-center h-5">
                                <input type="hidden" name="randomize_questions" value="0">
                                <input type="checkbox"
                                       id="randomize_questions"
                                       name="randomize_questions"
                                       value="1"
                                       {{ old('randomize_questions') ? 'checked' : '' }}
                                       class="w-5 h-5 text-purple-600 rounded focus:ring-2 focus:ring-purple-500 cursor-pointer">
                            </div>
                            <div class="ml-3">
                                <label for="randomize_questions" class="font-semibold text-gray-900 cursor-pointer">
                                    Mélanger les questions
                                </label>
                                <p class="text-sm text-gray-600">Ordre aléatoire à chaque tentative</p>
                            </div>
                        </div>

                        {{-- Mélanger les réponses --}}
                        <div class="relative flex items-start p-4 bg-gradient-to-r from-pink-50 to-pink-100 rounded-xl border border-pink-200 hover:shadow-md transition-all duration-200">
                            <div class="flex items-center h-5">
                                <input type="hidden" name="randomize_answers" value="0">
                                <input type="checkbox"
                                       id="randomize_answers"
                                       name="randomize_answers"
                                       value="1"
                                       {{ old('randomize_answers') ? 'checked' : '' }}
                                       class="w-5 h-5 text-pink-600 rounded focus:ring-2 focus:ring-pink-500 cursor-pointer">
                            </div>
                            <div class="ml-3">
                                <label for="randomize_answers" class="font-semibold text-gray-900 cursor-pointer">
                                    Mélanger les réponses
                                </label>
                                <p class="text-sm text-gray-600">Ordre aléatoire des choix de réponse</p>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Boutons d'action --}}
                <div class="flex items-center justify-end gap-4 bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <a href="{{ route('courses.lessons.quizzes.index', [$course, $lesson]) }}"
                       class="px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all duration-200">
                        Annuler
                    </a>
                    <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Créer le quiz
                    </span>
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection
