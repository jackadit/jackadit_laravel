<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier la leçon : {{ $lesson->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('lessons.update', $lesson) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Titre -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                            Titre de la leçon *
                        </label>
                        <input type="text"
                               name="title"
                               id="title"
                               value="{{ old('title', $lesson->title) }}"
                               class="w-full rounded-md border-gray-300 @error('title') border-red-500 @enderror"
                               required>
                        @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description courte
                        </label>
                        <textarea name="description"
                                  id="description"
                                  rows="3"
                                  class="w-full rounded-md border-gray-300">{{ old('description', $lesson->description) }}</textarea>
                    </div>

                    <!-- Contenu -->
                    <div class="mb-6">
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                            Contenu complet *
                        </label>
                        <textarea name="content"
                                  id="content"
                                  rows="10"
                                  class="w-full rounded-md border-gray-300 @error('content') border-red-500 @enderror"
                                  required>{{ old('content', $lesson->content) }}</textarea>
                        @error('content')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Type -->
                    <div class="mb-6">
                        <label for="type" class="block text-sm font-medium text-gray-700 mb-2">
                            Type de contenu
                        </label>
                        <select name="type" id="type" class="w-full rounded-md border-gray-300">
                            <option value="video" {{ old('type', $lesson->type) == 'video' ? 'selected' : '' }}>Vidéo</option>
                            <option value="text" {{ old('type', $lesson->type) == 'text' ? 'selected' : '' }}>Texte</option>
                            <option value="quiz" {{ old('type', $lesson->type) == 'quiz' ? 'selected' : '' }}>Quiz</option>
                        </select>
                    </div>

                    <!-- URL Vidéo -->
                    <div class="mb-6">
                        <label for="video_url" class="block text-sm font-medium text-gray-700 mb-2">
                            URL de la vidéo
                        </label>
                        <input type="url"
                               name="video_url"
                               id="video_url"
                               value="{{ old('video_url', $lesson->video_url) }}"
                               class="w-full rounded-md border-gray-300">
                    </div>

                    <!-- Durée -->
                    <div class="mb-6">
                        <label for="duration_minutes" class="block text-sm font-medium text-gray-700 mb-2">
                            Durée (en minutes)
                        </label>
                        <input type="number"
                               name="duration_minutes"
                               id="duration_minutes"
                               value="{{ old('duration_minutes', $lesson->duration_minutes) }}"
                               min="0"
                               class="w-full rounded-md border-gray-300">
                    </div>

                    <!-- Ordre -->
                    <div class="mb-6">
                        <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                            Ordre d'affichage
                        </label>
                        <input type="number"
                               name="order"
                               id="order"
                               value="{{ old('order', $lesson->order) }}"
                               min="1"
                               class="w-full rounded-md border-gray-300">
                    </div>

                    <!-- Leçon gratuite -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   name="is_free"
                                   value="1"
                                   {{ old('is_free', $lesson->is_free) ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Leçon gratuite</span>
                        </label>
                    </div>

                    <!-- Nouveaux fichiers -->
                    <div class="mb-6">
                        <label for="attachments" class="block text-sm font-medium text-gray-700 mb-2">
                            Ajouter des fichiers
                        </label>
                        <input type="file"
                               name="attachments[]"
                               id="attachments"
                               multiple
                               class="w-full">
                    </div>

                    <!-- Boutons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                            Mettre à jour
                        </button>
                        <a href="{{ route('lessons.show', $lesson->id) }}"
                           class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
