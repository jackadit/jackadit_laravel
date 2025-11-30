@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}" class="w-full h-64 object-cover">

            <div class="p-8">
                <div class="flex items-center justify-between mb-4">
                    <span class="inline-block px-3 py-1 text-sm font-semibold text-indigo-600 bg-indigo-100 rounded-full">
                        {{ ucfirst($course->level) }}
                    </span>
                    <span class="text-3xl font-bold text-gray-900">${{ $course->price }}</span>
                </div>

                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $course->title }}</h1>

                <div class="flex items-center text-gray-600 mb-6">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                    </svg>
                    <span>By {{ $course->teacher->name ?? 'Unknown Teacher' }}</span>
                </div>

                <div class="prose max-w-none mb-8">
                    <p class="text-gray-700 leading-relaxed">{{ $course->description }}</p>
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('courses.edit', $course) }}"
                       class="px-6 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                        Edit Course
                    </a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700"
                                onclick="return confirm('Are you sure you want to delete this course?')">
                            Delete Course
                        </button>
                    </form>
                    <a href="{{ route('courses.index') }}"
                       class="px-6 py-3 border border-gray-300 rounded-lg hover:bg-gray-100">
                        Back to Courses
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- 📚 SECTION LEÇONS (CORRIGÉE)               -->
    <!-- ============================================ -->
    <div class="mt-8">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-2xl font-bold">Leçons ({{ $course->lessons_count }})</h3>
            {{-- ✅ CORRIGÉ : courses.lessons.index --}}
            <a href="{{ route('courses.lessons.index', $course) }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                📖 Gérer les leçons
            </a>
        </div>

        @if($course->lessons->isEmpty())
            <div class="bg-gray-100 p-6 rounded-lg text-center">
                <p class="text-gray-600">Aucune leçon pour ce cours.</p>
                {{-- ✅ CORRIGÉ : courses.lessons.create --}}
                <a href="{{ route('courses.lessons.create', $course) }}"
                   class="text-blue-600 hover:underline mt-2 inline-block">
                    ➕ Créer la première leçon
                </a>
            </div>
        @else
            <div class="space-y-3">
                @foreach($course->lessons()->ordered()->get() as $lesson)
                    <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-gray-100 transition">
                        <div class="flex items-center space-x-3">
                            <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-sm font-medium">
                                {{ $lesson->order }}
                            </span>
                            <div>
                                {{-- ✅ CORRIGÉ : courses.lessons.show --}}
                                <a href="{{ route('courses.lessons.show', [$course, $lesson]) }}"
                                   class="text-lg font-semibold text-gray-900 hover:text-blue-600">
                                    {{ $lesson->title }}
                                </a>
                                <div class="flex items-center space-x-3 text-sm text-gray-500 mt-1">
                                    @if($lesson->duration_minutes)
                                        <span>⏱️ {{ $lesson->duration_minutes }} min</span>
                                    @endif
                                    @if($lesson->is_free)
                                        <span class="text-green-600">🔓 Gratuite</span>
                                    @endif
                                    <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-xs">
                                        {{ ucfirst($lesson->type) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- ✅ CORRIGÉ : courses.lessons.show --}}
                        <a href="{{ route('courses.lessons.show', [$course, $lesson]) }}"
                           class="text-blue-600 hover:text-blue-900 font-medium">
                            Voir →
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
