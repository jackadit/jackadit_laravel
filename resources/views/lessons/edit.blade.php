@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">

        <!-- En-tête avec retour -->
        <div class="mb-6">
            <a href="{{ route('lessons.index', $course) }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux leçons
            </a>
        </div>

        <!-- Card principale -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">

            <!-- En-tête avec dégradé -->
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 2rem;">
                <div class="flex items-center space-x-3">
                    <span style="font-size: 2.5rem;">✏️</span>
                    <div>
                        <h1 class="text-3xl font-bold text-white">
                            Modifier la leçon
                        </h1>
                        <p class="text-purple-100 mt-1">
                            Cours : <strong>{{ $course->title }}</strong>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Formulaire -->
            <div class="p-8">
                <form action="{{ route('lessons.update', [$course, $lesson]) }}"
                      method="POST"
                      class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Titre -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                            📌 Titre de la leçon *
                        </label>
                        <input type="text"
                               name="title"
                               id="title"
                               value="{{ old('title', $lesson->title) }}"
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                               placeholder="Ex: Introduction au HTML">
                        @error('title')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                            📝 Description
                        </label>
                        <textarea name="description"
                                  id="description"
                                  rows="4"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                                  placeholder="Décrivez le contenu de la leçon...">{{ old('description', $lesson->description) }}</textarea>
                        @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Type de contenu -->
                    <div>
                        <label for="content_type" class="block text-sm font-semibold text-gray-700 mb-2">
                            🎬 Type de contenu *
                        </label>
                        <select name="content_type"
                                id="content_type"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                            <option value="">-- Choisir --</option>
                            <option value="video" {{ old('content_type', $lesson->content_type) == 'video' ? 'selected' : '' }}>🎥 Vidéo</option>
                            <option value="text" {{ old('content_type', $lesson->content_type) == 'text' ? 'selected' : '' }}>📄 Texte</option>
                        </select>
                        @error('content_type')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- URL Vidéo (conditionnelle) -->
                    <div id="video_url_field" style="display: {{ old('content_type', $lesson->content_type) == 'video' ? 'block' : 'none' }};">
                        <label for="video_url" class="block text-sm font-semibold text-gray-700 mb-2">
                            🔗 URL de la vidéo
                        </label>
                        <input type="url"
                               name="video_url"
                               id="video_url"
                               value="{{ old('video_url', $lesson->video_url) }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                               placeholder="https://youtube.com/watch?v=...">
                        <p class="mt-2 text-xs text-gray-500">
                            YouTube, Vimeo, ou lien direct
                        </p>
                        @error('video_url')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Contenu texte (conditionnel) -->
                    <div id="content_field" style="display: {{ old('content_type', $lesson->content_type) == 'text' ? 'block' : 'none' }};">
                        <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                            📝 Contenu de la leçon
                        </label>
                        <textarea name="content"
                                  id="content"
                                  rows="8"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all font-mono text-sm"
                                  placeholder="Écrivez le contenu de votre leçon...">{{ old('content', $lesson->content) }}</textarea>
                        @error('content')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Grille : Durée + Ordre -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Durée -->
                        <div>
                            <label for="duration" class="block text-sm font-semibold text-gray-700 mb-2">
                                ⏱️ Durée (minutes) *
                            </label>
                            <input type="number"
                                   name="duration"
                                   id="duration"
                                   value="{{ old('duration', $lesson->duration) }}"
                                   required
                                   min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                                   placeholder="Ex: 15">
                            @error('duration')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Ordre -->
                        <div>
                            <label for="order" class="block text-sm font-semibold text-gray-700 mb-2">
                                🔢 Position dans le cours *
                            </label>
                            <input type="number"
                                   name="order"
                                   id="order"
                                   value="{{ old('order', $lesson->order) }}"
                                   required
                                   min="1"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                                   placeholder="Ex: 1">
                            <p class="mt-2 text-xs text-gray-500">
                                Total de leçons : {{ $course->lessons()->count() }}
                            </p>
                            @error('order')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <!-- Options : Gratuit + Publié -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Leçon gratuite -->
                        <div class="flex items-center space-x-3 p-4 bg-green-50 border border-green-200 rounded-lg">
                            <input type="checkbox"
                                   name="is_free"
                                   id="is_free"
                                   value="1"
                                   {{ old('is_free', $lesson->is_free) ? 'checked' : '' }}
                                   class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
                            <label for="is_free" class="text-sm font-medium text-gray-700 cursor-pointer">
                                🎁 Accessible gratuitement
                            </label>
                        </div>

                        <!-- Publié -->
                        <div class="flex items-center space-x-3 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                            <input type="checkbox"
                                   name="is_published"
                                   id="is_published"
                                   value="1"
                                   {{ old('is_published', $lesson->is_published) ? 'checked' : '' }}
                                   class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_published" class="text-sm font-medium text-gray-700 cursor-pointer">
                                ✅ Publier la leçon
                            </label>
                        </div>

                    </div>

                    <!-- Boutons d'action -->
                    <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                        <a href="{{ route('lessons.index', $course) }}"
                           class="px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition-colors">
                            ❌ Annuler
                        </a>

                        <button type="submit"
                                class="px-8 py-3 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all"
                                style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            💾 Enregistrer
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- Script pour afficher/masquer les champs selon le type -->
    <script>
        document.getElementById('content_type').addEventListener('change', function() {
            const videoField = document.getElementById('video_url_field');
            const contentField = document.getElementById('content_field');

            if (this.value === 'video') {
                videoField.style.display = 'block';
                contentField.style.display = 'none';
            } else if (this.value === 'text') {
                videoField.style.display = 'none';
                contentField.style.display = 'block';
            } else {
                videoField.style.display = 'none';
                contentField.style.display = 'none';
            }
        });
    </script>
@endsection
