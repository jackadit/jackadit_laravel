<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer un quiz pour : {{ $course->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('quizzes.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}">

                    <!-- Titre -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                            Titre du quiz *
                        </label>
                        <input type="text"
                               name="title"
                               id="title"
                               value="{{ old('title') }}"
                               class="w-full rounded-md border-gray-300 @error('title') border-red-500 @enderror"
                               required>
                        @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description
                        </label>
                        <textarea name="description"
                                  id="description"
                                  rows="3"
                                  class="w-full rounded-md border-gray-300">{{ old('description') }}</textarea>
                    </div>

                    <!-- Durée limite -->
                    <div class="mb-6">
                        <label for="time_limit" class="block text-sm font-medium text-gray-700 mb-2">
                            Durée limite (en minutes)
                        </label>
                        <input type="number"
                               name="time_limit"
                               id="time_limit"
                               value="{{ old('time_limit') }}"
                               min="1"
                               class="w-full rounded-md border-gray-300">
                        <p class="text-sm text-gray-500 mt-1">Laissez vide pour aucune limite</p>
                    </div>

                    <!-- Score minimum -->
                    <div class="mb-6">
                        <label for="passing_score" class="block text-sm font-medium text-gray-700 mb-2">
                            Score minimum pour réussir (%)
                        </label>
                        <input type="number"
                               name="passing_score"
                               id="passing_score"
                               value="{{ old('passing_score', 70) }}"
                               min="0"
                               max="100"
                               class="w-full rounded-md border-gray-300">
                    </div>

                    <!-- Quiz obligatoire -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   name="is_required"
                                   value="1"
                                   {{ old('is_required') ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Quiz obligatoire pour terminer le cours</span>
                        </label>
                    </div>

                    <!-- Boutons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                            Créer le quiz
                        </button>
                        <a href="{{ route('courses.show', $course->slug) }}"
                           class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">
                            Annuler
                        </a>
                    </div>
                </form>

                <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                    <p class="text-sm text-blue-800">
                        💡 <strong>Astuce :</strong> Après avoir créé le quiz, vous pourrez ajouter des questions depuis la page du quiz.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
