@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Create New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500" required>
                @error('title')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="description" rows="4"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Level</label>
                <select name="level" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500" required>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Price ($)</label>
                <input type="number" name="price" value="{{ old('price', 0) }}" step="0.01"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox" name="is_published" value="1" class="mr-2">
                    <span class="text-gray-700">Publish immediately</span>
                </label>
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('courses.index') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Cancel</a>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Create Course</button>
            </div>
        </form>
    </div>
@endsection
