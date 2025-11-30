@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">📚 Leçons du cours</h1>
                <p class="text-gray-600 mt-1">{{ $course->title }}</p>
            </div>
            <a href="{{ route('courses.lessons.create', $course) }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                ➕ Nouvelle leçon
            </a>
        </div>
    </div>

    {{-- Statistiques --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-blue-50 p-4 rounded-lg">
            <p class="text-sm text-gray-600">Total leçons</p>
            <p class="text-3xl font-bold text-blue-600">{{ $lessons->total() }}</p>
        </div>
        <div class="bg-green-50 p-4 rounded-lg">
            <p class="text-sm text-gray-600">Publiées</p>
            <p class="text-3xl font-bold text-green-600">
                {{ $course->lessons()->where('is_published', true)->count() }}
            </p>
        </div>
        <div class="bg-purple-50 p-4 rounded-lg">
            <p class="text-sm text-gray-600">Gratuites</p>
            <p class="text-3xl font-bold text-purple-600">
                {{ $course->lessons()->where('is_free', true)->count() }}
            </p>
        </div>
    </div>

    {{-- Liste des leçons --}}
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6">
            <div class="space-y-3">
                @forelse($lessons as $lesson)
                    <div class="border rounded-lg p-4 hover:bg-gray-50 transition flex items-center justify-between">

                        {{-- Infos leçon --}}
                        <div class="flex items-center space-x-4">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-bold">
                            #{{ $lesson->order }}
                        </span>
                            <div>
                                <h3 class="font-semibold text-lg">{{ $lesson->title }}</h3>
                                <div class="flex items-center space-x-3 text-sm text-gray-600 mt-1">
                                    <span>{{ $lesson->content_icon }} {{ ucfirst($lesson->content_type) }}</span>
                                    <span>⏱️ {{ $lesson->formatted_duration }}</span>
                                    @if($lesson->is_published)
                                        <span class="text-green-600">✅ Publié</span>
                                    @else
                                        <span class="text-gray-500">⏳ Brouillon</span>
                                    @endif
                                    @if($lesson->is_free)
                                        <span class="text-yellow-600">🆓 Gratuit</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('courses.lessons.show', [$course, $lesson]) }}"
                               class="text-blue-600 hover:text-blue-900 font-medium">
                                👁️ Voir
                            </a>
                            <a href="{{ route('courses.lessons.edit', [$course, $lesson]) }}"
                               class="text-green-600 hover:text-green-900 font-medium">
                                ✏️ Modifier
                            </a>
                            <form action="{{ route('courses.lessons.destroy', [$course, $lesson]) }}"
                                  method="POST"
                                  onsubmit="return confirm('Supprimer cette leçon ?')"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-medium">
                                    🗑️ Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg mb-4">
                            📚 Aucune leçon pour ce cours
                        </p>
                        <a href="{{ route('courses.lessons.create', $course) }}"
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                            ➕ Créer la première leçon
                        </a>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if($lessons->hasPages())
                <div class="mt-6">
                    {{ $lessons->links() }}
                </div>
            @endif
        </div>
    </div>

    {{-- Bouton retour --}}
    <div class="mt-6">
        <a href="{{ route('courses.index') }}"
           class="text-blue-600 hover:text-blue-900 font-medium">
            ← Retour aux cours
        </a>
    </div>
@endsection
