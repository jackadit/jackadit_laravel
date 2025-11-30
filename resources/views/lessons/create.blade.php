@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        <!-- En-tête -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">➕ Créer une nouvelle leçon</h1>
                    <p class="text-gray-600">
                        Cours :
                        <a href="{{ route('courses.show', $course) }}" class="text-blue-600 hover:underline font-semibold">
                            {{ $course->title }}
                        </a>
                    </p>
                </div>
                <a href="{{ route('courses.lessons.index', $course) }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                    ← Annuler
                </a>
            </div>
        </div>

        <!-- Formulaire -->
        <div class="bg-white rounded-lg shadow-md p-6">

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <strong>⚠️ Erreurs :</strong>
                    <ul class="list-disc list-inside mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('courses.lessons.store', $course) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Titre -->
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">
                        📌 Titre de la leçon *
                    </label>
                    <input type="text"
                           id="title"
                           name="title"
                           value="{{ old('title') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           required>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">
                        📝 Description
                    </label>
                    <textarea id="description"
                              name="description"
                              rows="3"
                              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
                </div>

                <!-- Type, Ordre et Durée -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

                    <!-- Type -->
                    <div>
                        <label for="type" class="block text-gray-700 font-semibold mb-2">
                            🎬 Type *
                        </label>
                        <select id="type"
                                name="type"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                            <option value="video" {{ old('type') === 'video' ? 'selected' : '' }}>🎥 Vidéo</option>
                            <option value="text" {{ old('type') === 'text' ? 'selected' : '' }}>📄 Texte</option>
                            <option value="quiz" {{ old('type') === 'quiz' ? 'selected' : '' }}>❓ Quiz</option>
                            <option value="document" {{ old('type') === 'document' ? 'selected' : '' }}>📎 Document</option>
                        </select>
                    </div>

                    <!-- Ordre -->
                    <div>
                        <label for="order" class="block text-gray-700 font-semibold mb-2">
                            🔢 Ordre *
                        </label>
                        <input type="number"
                               id="order"
                               name="order"
                               value="{{ old('order', $nextOrder) }}"
                               min="1"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               required>
                    </div>

                    <!-- Durée -->
                    <div>
                        <label for="duration" class="block text-gray-700 font-semibold mb-2">
                            ⏱️ Durée (minutes)
                        </label>
                        <input type="number"
                               id="duration"
                               name="duration"
                               value="{{ old('duration') }}"
                               min="0"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                </div>

                <!-- URL Vidéo -->
                <div class="mb-6">
                    <label for="video_url" class="block text-gray-700 font-semibold mb-2">
                        🎥 URL de la vidéo
                    </label>
                    <input type="url"
                           id="video_url"
                           name="video_url"
                           value="{{ old('video_url') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="https://www.youtube.com/watch?v=...">
                    <p class="text-sm text-gray-500 mt-1">
                        💡 Pour YouTube, utilisez l'URL complète
                    </p>
                </div>

                <!-- Document -->
                <div class="mb-6">
                    <label for="document" class="block text-gray-700 font-semibold mb-2">
                        📎 Document (PDF, Word, PowerPoint)
                    </label>
                    <input type="file"
                           id="document"
                           name="document"
                           accept=".pdf,.doc,.docx,.ppt,.pptx"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-sm text-gray-500 mt-1">
                        📄 Formats acceptés : PDF, Word, PowerPoint (max 10 Mo)
                    </p>
                </div>

                <!-- Contenu -->
                <div class="mb-6">
                    <label for="content" class="block text-gray-700 font-semibold mb-2">
                        📄 Contenu de la leçon
                    </label>
                    <textarea id="content"
                              name="content"
                              rows="10"
                              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 font-mono text-sm">{{ old('content') }}</textarea>
                    <p class="text-sm text-gray-500 mt-1">
                        💡 Vous pouvez utiliser du Markdown ou du HTML
                    </p>
                </div>

                <!-- Ressources -->
                <div class="mb-6">
                    <label for="resources" class="block text-gray-700 font-semibold mb-2">
                        📎 Ressources additionnelles
                    </label>
                    <textarea id="resources"
                              name="resources"
                              rows="3"
                              class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                              placeholder="Liens vers des ressources externes, exercices supplémentaires...">{{ old('resources') }}</textarea>
                </div>

                <!-- Accès gratuit et Publication -->
                <div class="mb-6 space-y-3">
                    <label class="flex items-center">
                        <input type="checkbox"
                               name="is_free"
                               value="1"
                               {{ old('is_free') ? 'checked' : '' }}
                               class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-gray-700 font-semibold">
                            🆓 Leçon accessible gratuitement
                        </span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox"
                               name="is_published"
                               value="1"
                               {{ old('is_published') ? 'checked' : '' }}
                               class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-gray-700 font-semibold">
                            ✅ Publier la leçon immédiatement
                        </span>
                    </label>
                </div>

                <!-- Boutons -->
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('courses.lessons.index', $course) }}"
                       class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">
                        Annuler
                    </a>
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
                        ✅ Créer la leçon
                    </button>
                </div>

            </form>
        </div>

    </div>
@endsection
