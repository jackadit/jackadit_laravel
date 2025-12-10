<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier le cours') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('courses.update', $course) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Titre -->
                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                            Titre du cours *
                        </label>
                        <input type="text"
                               name="title"
                               id="title"
                               value="{{ old('title', $course->title) }}"
                               class="w-full rounded-md border-gray-300 @error('title') border-red-500 @enderror"
                               required>
                        @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description *
                        </label>
                        <textarea name="description"
                                  id="description"
                                  rows="5"
                                  class="w-full rounded-md border-gray-300 @error('description') border-red-500 @enderror"
                                  required>{{ old('description', $course->description) }}</textarea>
                        @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Catégorie -->
                    <div class="mb-6">
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Catégorie *
                        </label>
                        <select name="category_id"
                                id="category_id"
                                class="w-full rounded-md border-gray-300 @error('category_id') border-red-500 @enderror"
                                required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Prix -->
                    <div class="mb-6">
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-2">
                            Prix (€) *
                        </label>
                        <input type="number"
                               name="price"
                               id="price"
                               value="{{ old('price', $course->price) }}"
                               step="0.01"
                               min="0"
                               class="w-full rounded-md border-gray-300 @error('price') border-red-500 @enderror"
                               required>
                        @error('price')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image actuelle -->
                    @if($course->thumbnail)
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Image actuelle</label>
                            <img src="{{ Storage::url($course->thumbnail) }}" alt="" class="w-48 h-32 object-cover rounded">
                        </div>
                    @endif

                    <!-- Nouvelle image -->
                    <div class="mb-6">
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">
                            Nouvelle image (optionnel)
                        </label>
                        <input type="file"
                               name="thumbnail"
                               id="thumbnail"
                               accept="image/*"
                               class="w-full">
                        @error('thumbnail')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Statut publication -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   name="is_published"
                                   value="1"
                                   {{ old('is_published', $course->is_published) ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Publier le cours</span>
                        </label>
                    </div>

                    <!-- Cours en vedette -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   name="is_featured"
                                   value="1"
                                   {{ old('is_featured', $course->is_featured) ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-700">Mettre en vedette</span>
                        </label>
                    </div>

                    <!-- Boutons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                            Mettre à jour
                        </button>
                        <a href="{{ route('courses.show', $course->slug) }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
