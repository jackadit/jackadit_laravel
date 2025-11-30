@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        <!-- En-tête -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $lesson->title }}</h1>
                    <p class="text-gray-600">
                        Cours :
                        <a href="{{ route('courses.show', $course) }}" class="text-blue-600 hover:underline">
                            {{ $course->title }}
                        </a>
                    </p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('courses.lessons.edit', [$course, $lesson]) }}"
                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                        ✏️ Modifier
                    </a>
                    <a href="{{ route('courses.lessons.index', $course) }}"
                       class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                        ← Retour
                    </a>
                </div>
            </div>
        </div>

        <!-- Informations -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">📊 Informations</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="border-l-4 border-blue-500 pl-4">
                    <p class="text-gray-600 text-sm">Type</p>
                    <p class="text-lg font-semibold">
                        @if($lesson->type === 'video')
                            🎥 Vidéo
                        @elseif($lesson->type === 'text')
                            📄 Texte
                        @elseif($lesson->type === 'quiz')
                            ❓ Quiz
                        @else
                            📦 {{ ucfirst($lesson->type) }}
                        @endif
                    </p>
                </div>
                <div class="border-l-4 border-green-500 pl-4">
                    <p class="text-gray-600 text-sm">Ordre</p>
                    <p class="text-lg font-semibold">{{ $lesson->order }}</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-4">
                    <p class="text-gray-600 text-sm">Durée</p>
                    <p class="text-lg font-semibold">
                        @if($lesson->duration)
                            {{ $lesson->duration }} min
                        @else
                            Non définie
                        @endif
                    </p>
                </div>
                <div class="border-l-4 border-orange-500 pl-4">
                    <p class="text-gray-600 text-sm">Accès</p>
                    <p class="text-lg font-semibold">
                        @if($lesson->is_free)
                            🔓 Gratuite
                        @else
                            🔒 Payante
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <!-- Contenu -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">📝 Contenu</h2>

            @if($lesson->type === 'video' && $lesson->video_url)
                <div class="aspect-video bg-gray-900 rounded-lg mb-4">
                    <iframe src="{{ $lesson->video_url }}"
                            class="w-full h-full rounded-lg"
                            frameborder="0"
                            allowfullscreen>
                    </iframe>
                </div>
            @endif

            @if($lesson->content)
                <div class="prose max-w-none">
                    {!! nl2br(e($lesson->content)) !!}
                </div>
            @else
                <p class="text-gray-500 italic">Aucun contenu disponible.</p>
            @endif
        </div>

        <!-- Ressources -->
        @if($lesson->resources)
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4">📎 Ressources</h2>
                <div class="bg-gray-50 p-4 rounded">
                    <pre class="text-sm">{{ $lesson->resources }}</pre>
                </div>
            </div>
        @endif

        <!-- Actions -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">⚙️ Actions</h2>
            <div class="flex space-x-3">
                <a href="{{ route('courses.lessons.edit', [$course, $lesson]) }}"
                   class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg">
                    ✏️ Modifier cette leçon
                </a>

                <form action="{{ route('courses.lessons.destroy', [$course, $lesson]) }}"
                      method="POST"
                      class="inline"
                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette leçon ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-lg">
                        🗑️ Supprimer
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
