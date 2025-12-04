@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">

        <!-- En-tête avec retour -->
        <div class="mb-6">
            <a href="{{ route('courses.index') }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux cours
            </a>
        </div>

        <!-- Carte du formulaire -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-3xl mx-auto">

            <!-- En-tête -->
            <div style="background: linear-gradient(to right, #10b981, #3b82f6); padding: 1.5rem;">
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <div style="font-size: 2.25rem;">➕</div>
                    <h1 style="font-size: 1.5rem; font-weight: 700; color: white;">Créer un nouveau cours</h1>
                </div>
            </div>

            <!-- Formulaire -->
            <form action="{{ route('courses.store') }}" method="POST" class="p-6 space-y-6">
                @csrf

                <!-- Titre -->
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Titre du cours <span class="text-red-500">*</span>
                    </label>
                    <input type="text"
                           id="title"
                           name="title"
                           value="{{ old('title') }}"
                           required
                           placeholder="Ex: Introduction à Laravel"
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
                              placeholder="Décrivez le contenu et les objectifs du cours..."
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
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
                        <option value="">-- Sélectionnez un niveau --</option>
                        <option value="beginner" {{ old('difficulty_level') == 'beginner' ? 'selected' : '' }}>Débutant</option>
                        <option value="intermediate" {{ old('difficulty_level') == 'intermediate' ? 'selected' : '' }}>Intermédiaire</option>
                        <option value="advanced" {{ old('difficulty_level') == 'advanced' ? 'selected' : '' }}>Avancé</option>
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
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-semibold">$</span>
                        <input type="number"
                               id="price"
                               name="price"
                               step="0.01"
                               min="0"
                               value="{{ old('price') }}"
                               required
                               placeholder="0.00"
                               class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('price') border-red-500 @enderror">
                    </div>
                    @error('price')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Checkbox Publié -->
                <div class="flex items-center">
                    <input type="checkbox"
                           id="is_published"
                           name="is_published"
                           value="1"
                           {{ old('is_published') ? 'checked' : '' }}
                           class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                    <label for="is_published" class="ml-3 text-sm font-medium text-gray-700">
                        Publier ce cours immédiatement
                    </label>
                </div>

                <!-- Boutons d'action -->
                <div class="flex items-center justify-end space-x-4 pt-4 border-t">
                    <a href="{{ route('courses.index') }}"
                       class="px-6 py-3 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg font-medium transition">
                        Annuler
                    </a>
                    <button type="submit"
                            class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Créer le cours
                    </button>
                </div>

            </form>

        </div>

    </div>
@endsection
