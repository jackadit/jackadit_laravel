@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        <!-- En-tête -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-4xl font-bold text-gray-900">Tous les cours</h1>
            <a href="{{ route('courses.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-lg shadow-lg transition">
                + Créer un cours
            </a>
        </div>

        <!-- Grille des cours -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($courses as $course)
                <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow overflow-hidden flex flex-col">

                    <!-- Image / Placeholder -->
                    <div class="h-40 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                        <span class="text-6xl">📚</span>
                    </div>

                    <!-- Contenu -->
                    <div class="p-5 flex-grow flex flex-col">

                        <!-- Badge niveau + Prix -->
                        <div class="flex justify-between items-center mb-3">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full
                                {{ $course->difficulty_level === 'beginner' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $course->difficulty_level === 'intermediate' ? 'bg-blue-100 text-blue-800' : '' }}
                                {{ $course->difficulty_level === 'advanced' ? 'bg-purple-100 text-purple-800' : '' }}">
                                {{ strtoupper($course->difficulty_level) }}
                            </span>
                            <span class="text-xl font-bold text-gray-900">
                                ${{ number_format($course->price, 2) }}
                            </span>
                        </div>

                        <!-- Titre -->
                        <h2 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">
                            {{ $course->title }}
                        </h2>

                        <!-- Description -->
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3 flex-grow">
                            {{ $course->description }}
                        </p>

                        <!-- Footer : Auteur + Actions -->
                        <div class="border-t pt-4 mt-auto">
                            <p class="text-xs text-gray-500 mb-3">
                                Par {{ $course->instructor->name ?? 'Frédérique Le Legros' }}
                            </p>

                            <!-- Boutons actions -->
                            <div class="flex gap-2">
                                <a href="{{ route('courses.show', $course) }}"
                                   class="flex-1 text-center bg-blue-50 hover:bg-blue-100 text-blue-600 font-semibold py-2 rounded transition">
                                    Visualiser
                                </a>
                                <a href="{{ route('courses.edit', $course) }}"
                                   class="flex-1 text-center bg-yellow-50 hover:bg-yellow-100 text-yellow-600 font-semibold py-2 rounded transition">
                                    Éditer
                                </a>
                                <form action="{{ route('courses.destroy', $course) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Supprimer ce cours ?')"
                                            class="w-full bg-red-50 hover:bg-red-100 text-red-600 font-semibold py-2 rounded transition">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-gray-500 text-xl">Aucun cours disponible</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $courses->links() }}
        </div>

    </div>
@endsection
