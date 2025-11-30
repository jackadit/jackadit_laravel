@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">All Courses</h1>
        <a href="{{ route('courses.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
            + Create Course
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($courses as $course)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}" class="w-full h-48 object-cover">
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-indigo-600 uppercase">{{ $course->level }}</span>
                        <span class="text-lg font-bold text-gray-900">${{ $course->price }}</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $course->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($course->description, 100) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">By {{ $course->teacher->name ?? 'Unknown' }}</span>
                        <div class="flex space-x-2">
                            <a href="{{ route('courses.show', $course) }}" class="text-indigo-600 hover:text-indigo-800">View</a>
                            <a href="{{ route('courses.edit', $course) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                            <form action="{{ route('courses.destroy', $course) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-500">No courses available yet.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $courses->links() }}
    </div>
@endsection
