@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">

        <!-- En-tête avec retour -->
        <div class="mb-6">
            <a href="{{ route('courses.show', $course) }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour au cours
            </a>
        </div>

        <!-- Carte du formulaire -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-3xl mx-auto">

            <!-- En-tête -->
            <div class="bg-gradient-to-r from-yellow-500 to-orange-600 p-4">
                <div class="flex items-center space-x-1">
                    <div class="text-4xl">✏️</div>
                    <h1 class="text-3xl font-bold text-gray-900">Modifier le cours</h1>
                </div>
            </div>

            <!-- Formulaire -->
            <form action="{{ route('courses.update', $course) }}" method="POST" class="p-6 space-y-6">
                @csrf
                @method('PUT')

                <!-- Titre -->
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Titre du cours <span class="text-red-500">*</span>
                    </label>
                    <input type="text"
                           id="title"
                           name="title"
                           value="{{ old('title', $course->title) }}"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('title') border-red-500 @enderror">
                    @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                        Description <span class="text-red-500">*</span>
                    </label>
                    <textarea id="description"
                              name="description"
                              rows="5"
                              required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('description') border-red-500 @enderror">{{ old('description', $course->description) }}</textarea>
                    @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Niveau -->
                <div>
                    <label for="difficulty_level" class="block text-sm font-semibold text-gray-700 mb-2">
                        Niveau <span class="text-red-500">*</span>
                    </label>
                    <select id="difficulty_level"
                            name="difficulty_level"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('difficulty_level') border-red-500 @enderror">
                        <option value="beginner" {{ old('difficulty_level', $course->difficulty_level) === 'beginner' ? 'selected' : '' }}>
                            Débutant
                        </option>
                        <option value="intermediate" {{ old('difficulty_level', $course->difficulty_level) === 'intermediate' ? 'selected' : '' }}>
                            Intermédiaire
                        </option>
                        <option value="advanced" {{ old('difficulty_level', $course->difficulty_level) === 'advanced' ? 'selected' : '' }}>
                            Avancé
                        </option>
                    </select>
                    @error('difficulty_level')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Prix -->
                <div>
                    <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">
                        Prix ($) <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-3.5 text-gray-500 font-semibold">$</span>
                        <input type="number"
                               id="price"
                               name="price"
                               step="0.01"
                               min="0"
                               value="{{ old('price', $course->price) }}"
                               required
                               class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('price') border-red-500 @enderror">
                    </div>
                    @error('price')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Publié -->
                <div class="flex items-center">
                    <input type="checkbox"
                           id="published"
                           name="published"
                           value="1"
                           {{ old('published', $course->published) ? 'checked' : '' }}
                           class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="published" class="ml-3 text-sm font-medium text-gray-700">
                        Publier ce cours
                    </label>
                </div>

                <!-- Boutons d'action -->
                <div class="flex items-center justify-end space-x-3 pt-6 border-t">
                    <a href="{{ route('courses.show', $course) }}"
                       class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition">
                        Annuler
                    </a>
                    <button type="submit"
                            class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Mettre à jour
                    </button>
                </div>

            </form>

        </div>

    </div>
@endsection
