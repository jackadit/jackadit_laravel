@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6">
            <ol class="flex items-center space-x-2 text-gray-600">
                <li><a href="{{ route('courses.index') }}" class="hover:text-blue-600">Cours</a></li>
                <li>/</li>
                <li><a href="{{ route('courses.show', $course) }}" class="hover:text-blue-600">{{ $course->title }}</a></li>
                <li>/</li>
                <li><a href="{{ route('courses.lessons.show', [$course, $lesson]) }}" class="hover:text-blue-600">{{ $lesson->title }}</a></li>
                <li>/</li>
                <li class="text-gray-900 font-medium">Créer un Quiz</li>
            </ol>
        </nav>

        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Créer un Quiz</h1>

            <form action="{{ route('courses.lessons.quizzes.store', [$course, $lesson]) }}" method="POST">
                @csrf

                <!-- Titre -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Titre du Quiz <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                        required
                    >
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                        Description
                    </label>
                    <textarea
                        name="description"
                        id="description"
                        rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror"
                    >{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Score de passage -->
                    <div>
                        <label for="passing_score" class="block text-sm font-medium text-gray-700 mb-2">
                            Score de passage (%) <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="number"
                            name="passing_score"
                            id="passing_score"
                            value="{{ old('passing_score', 70) }}"
                            min="0"
                            max="100"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('passing_score') border-red-500 @enderror"
                            required
                        >
                        @error('passing_score')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Limite de temps -->
                    <div>
                        <label for="time_limit" class="block text-sm font-medium text-gray-700 mb-2">
                            Limite de temps (minutes)
                        </label>
                        <input
                            type="number"
                            name="time_limit"
                            id="time_limit"
                            value="{{ old('time_limit') }}"
                            min="1"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('time_limit') border-red-500 @enderror"
                            placeholder="Illimité"
                        >
                        @error('time_limit')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Nombre maximum de tentatives -->
                <div class="mb-6">
                    <label for="max_attempts" class="block text-sm font-medium text-gray-700 mb-2">
                        Nombre maximum de tentatives <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="number"
                        name="max_attempts"
                        id="max_attempts"
                        value="{{ old('max_attempts', 3) }}"
                        min="1"
                        max="10"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('max_attempts') border-red-500 @enderror"
                        required
                    >
                    @error('max_attempts')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Options -->
                <div class="mb-6 space-y-4">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            name="shuffle_questions"
                            id="shuffle_questions"
                            value="1"
                            {{ old('shuffle_questions') ? 'checked' : '' }}
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        >
                        <label for="shuffle_questions" class="ml-2 text-sm text-gray-700">
                            Mélanger les questions
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            name="show_correct_answers"
                            id="show_correct_answers"
                            value="1"
                            {{ old('show_correct_answers', true) ? 'checked' : '' }}
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        >
                        <label for="show_correct_answers" class="ml-2 text-sm text-gray-700">
                            Afficher les bonnes réponses après le quiz
                        </label>
                    </div>
                </div>

                <!-- Boutons -->
                <div class="flex justify-between items-center pt-6 border-t">
                    <a
                        href="{{ route('courses.lessons.show', [$course, $lesson]) }}"
                        class="px-6 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition"
                    >
                        Annuler
                    </a>
                    <button
                        type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                    >
                        Créer le Quiz
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
