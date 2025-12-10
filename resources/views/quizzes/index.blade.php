<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Quiz du cours : {{ $course->title }}
            </h2>
            @can('update', $course)
                <a href="{{ route('quizzes.create', ['course' => $course->id]) }}"
                   class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Créer un quiz
                </a>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($quizzes->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($quizzes as $quiz)
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-6">
                            <div class="flex items-start justify-between mb-4">
                                <h3 class="text-lg font-bold">{{ $quiz->title }}</h3>
                                @if($quiz->is_required)
                                    <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full">Obligatoire</span>
                                @endif
                            </div>

                            @if($quiz->description)
                                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($quiz->description, 100) }}</p>
                            @endif

                            <div class="space-y-2 mb-4 text-sm text-gray-600">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>{{ $quiz->questions_count ?? 0 }} questions</span>
                                </div>

                                @if($quiz->passing_score)
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span>Score minimum : {{ $quiz->passing_score }}%</span>
                                    </div>
                                @endif

                                @if($quiz->time_limit)
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span>{{ $quiz->time_limit }} minutes</span>
                                    </div>
                                @endif
                            </div>

                            <div class="flex gap-2">
                                <a href="{{ route('quizzes.show', $quiz->id) }}"
                                   class="flex-1 bg-blue-600 text-white text-center px-4 py-2 rounded-md hover:bg-blue-700">
                                    Commencer
                                </a>

                                @can('update', $course)
                                    <a href="{{ route('quizzes.edit', $quiz->id) }}"
                                       class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                                        ✏️
                                    </a>

                                    <form action="{{ route('quizzes.destroy', $quiz->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Supprimer ce quiz ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                                            🗑️
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-lg shadow p-12 text-center">
                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <p class="text-gray-500 text-lg mb-4">Aucun quiz pour ce cours.</p>
                    @can('update', $course)
                        <a href="{{ route('quizzes.create', ['course' => $course->id]) }}"
                           class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">
                            Créer le premier quiz
                        </a>
                    @endcan
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
