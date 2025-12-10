<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer une leçon pour : {{ $course->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('lessons.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}">

                    <!-- Titre -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                            Titre de la leçon *
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
                            Description courte
                        </label>
                        <textarea name="description"
                                  id="description"
                                  rows="3"
                                  class="w-full rounded-md border-gray-300">{{ old('description') }}</textarea>
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
                                  required>{{ old('content') }}</textarea>
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
                            <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Vidéo</option>
                            <option value="text" {{ old('type') == 'text' ? 'selected' : '' }}>Texte</option>
                            <option value="quiz" {{ old('type') == 'quiz' ? 'selected' : '' }}>Quiz</option>
                        </select>
                    </div>

                    <!-- URL Vidéo -->
                    <div class="mb-6">
                        <label for="video_url" class="block text-sm font-medium text-gray-700 mb-2">
                            URL de la vidéo (YouTube, Vimeo...)
                        </label>
                        <input type="url"
                               name="video_url"
                               id="video_url"
                               value="{{ old('video_url') }}"
                               placeholder="https://www.youtube.com/embed/..."
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
                               value="{{ old('duration_minutes') }}"
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
                               value="{{ old('order', $course->lessons->count() + 1) }}"
                               min="1"
                               class="w-full rounded-md border-gray-300">
                        <p class="text-sm text-gray-500 mt-1">Position de cette leçon dans le cours</p>
                    </div>

                    <!-- Leçon gratuite -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   name="is_free"
                                   value="1"
                                   {{ old('is_free') ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Leçon gratuite (accessible sans inscription)</span>
                        </label>
                    </div>

                    <!-- Fichiers joints -->
                    <div class="mb-6">
                        <label for="attachments" class="block text-sm font-medium text-gray-700 mb-2">
                            Fichiers joints (PDF, documents...)
                        </label>
                        <input type="file"
                               name="attachments[]"
                               id="attachments"
                               multiple
                               class="w-full">
                        <p class="text-sm text-gray-500 mt-1">Vous pouvez sélectionner plusieurs fichiers</p>
                    </div>

                    <!-- Boutons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                            Créer la leçon
                        </button>
                        <a href="{{ route('courses.show', $course->slug) }}"
                           class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
