<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier le quiz : {{ $quiz->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('quizzes.update', $quiz) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Titre -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                            Titre du quiz *
                        </label>
                        <input type="text"
                               name="title"
                               id="title"
                               value="{{ old('title', $quiz->title) }}"
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
                                  class="w-full rounded-md border-gray-300">{{ old('description', $quiz->description) }}</textarea>
                    </div>

                    <!-- Durée limite -->
                    <div class="mb-6">
                        <label for="time_limit" class="block text-sm font-medium text-gray-700 mb-2">
                            Durée limite (en minutes)
                        </label>
                        <input type="number"
                               name="time_limit"
                               id="time_limit"
                               value="{{ old('time_limit', $quiz->time_limit) }}"
                               min="1"
                               class="w-full rounded-md border-gray-300">
                    </div>

                    <!-- Score minimum -->
                    <div class="mb-6">
                        <label for="passing_score" class="block text-sm font-medium text-gray-700 mb-2">
                            Score minimum pour réussir (%)
                        </label>
                        <input type="number"
                               name="passing_score"
                               id="passing_score"
                               value="{{ old('passing_score', $quiz->passing_score) }}"
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
                                   {{ old('is_required', $quiz->is_required) ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Quiz obligatoire</span>
                        </label>
                    </div>

                    <!-- Boutons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                            Mettre à jour
                        </button>
                        <a href="{{ route('quizzes.show', $quiz->id) }}"
                           class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>

            <!-- Section des questions -->
            <div class="bg-white rounded-lg shadow p-8 mt-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold">Questions du quiz</h3>
                    <a href="{{ route('questions.create', ['quiz' => $quiz->id]) }}"
                       class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                        Ajouter une question
                    </a>
                </div>

                @if($quiz->questions->count() > 0)
                    <ul class="space-y-4">
                        @foreach($quiz->questions as $question)
                            <li class="border rounded-lg p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-semibold">{{ $question->question_text }}</h4>
                                        <span class="text-sm text-gray-500">Type: {{ $question->type }}</span>
                                    </div>
                                    <div class="flex gap-2">
                                        <a href="{{ route('questions.edit', $question->id) }}"
                                           class="text-blue-600 hover:underline text-sm">
                                            Modifier
                                        </a>
                                        <form action="{{ route('questions.destroy', $question->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Supprimer cette question ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline text-sm">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-center text-gray-500 py-8">Aucune question. Commencez par en ajouter une !</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
