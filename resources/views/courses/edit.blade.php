@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Edit Course</h1>

        <form action="{{ route('courses.update', $course) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title', $course->title) }}"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="description" rows="4"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">{{ old('description', $course->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Level</label>
                <select name="level" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500" required>
                    <option value="beginner" {{ $course->level === 'beginner' ? 'selected' : '' }}>Beginner</option>
                    <option value="intermediate" {{ $course->level === 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                    <option value="advanced" {{ $course->level === 'advanced' ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Price ($)</label>
                <input type="number" name="price" value="{{ old('price', $course->price) }}" step="0.01"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox" name="is_published" value="1" {{ $course->is_published ? 'checked' : '' }} class="mr-2">
                    <span class="text-gray-700">Published</span>
                </label>
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('courses.index') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Cancel</a>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Update Course</button>
            </div>
        </form>
    </div>
@endsection
