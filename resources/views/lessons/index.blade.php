<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Leçons du cours : {{ $course->title }}
            </h2>
            @can('update', $course)
                <a href="{{ route('lessons.create', ['course' => $course->id]) }}"
                   class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Ajouter une leçon
                </a>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($lessons->count() > 0)
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <ul class="divide-y divide-gray-200">
                        @foreach($lessons as $lesson)
                            <li class="p-6 hover:bg-gray-50 transition">
                                <div class="flex items-center justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center gap-4">
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                                            Leçon {{ $lesson->order }}
                                        </span>
                                            <h3 class="text-lg font-semibold">{{ $lesson->title }}</h3>
                                        </div>

                                        @if($lesson->description)
                                            <p class="text-gray-600 mt-2">{{ Str::limit($lesson->description, 150) }}</p>
                                        @endif

                                        <div class="flex items-center gap-4 mt-3 text-sm text-gray-500">
                                            @if($lesson->duration_minutes)
                                                <span>⏱️ {{ $lesson->duration_minutes }} min</span>
                                            @endif

                                            @if($lesson->type)
                                                <span class="capitalize">📄 {{ $lesson->type }}</span>
                                            @endif

                                            @if($lesson->is_free)
                                                <span class="text-green-600 font-semibold">🔓 Gratuit</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="flex gap-2">
                                        <a href="{{ route('lessons.show', $lesson->id) }}"
                                           class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                                            Voir
                                        </a>

                                        @can('update', $course)
                                            <a href="{{ route('lessons.edit', $lesson->id) }}"
                                               class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                                                Modifier
                                            </a>

                                            <form action="{{ route('lessons.destroy', $lesson->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Supprimer cette leçon ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                                                    Supprimer
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="bg-white rounded-lg shadow p-12 text-center">
                    <p class="text-gray-500 text-lg mb-4">Aucune leçon pour ce cours.</p>
                    @can('update', $course)
                        <a href="{{ route('lessons.create', ['course' => $course->id]) }}"
                           class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">
                            Créer la première leçon
                        </a>
                    @endcan
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
