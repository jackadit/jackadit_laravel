<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenue sur notre Plateforme E-Learning') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Statistiques --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 text-3xl font-bold">{{ $stats['total_courses'] }}</div>
                    <div class="text-gray-600">Cours Disponibles</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 text-3xl font-bold">{{ $stats['total_instructors'] }}</div>
                    <div class="text-gray-600">Formateurs</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 text-3xl font-bold">{{ $stats['total_students'] }}</div>
                    <div class="text-gray-600">Étudiants</div>
                </div>
            </div>

            {{-- Cours en Vedette --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-8">
                <h3 class="text-2xl font-bold mb-6">Cours en Vedette</h3>

                @if($featured_courses->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($featured_courses as $course)
                            <div class="border rounded-lg overflow-hidden hover:shadow-lg transition">
                                <div class="p-4">
                                    <h4 class="font-bold text-lg mb-2">{{ $course->title }}</h4>
                                    <p class="text-gray-600 text-sm mb-2">{{ Str::limit($course->description, 100) }}</p>
                                    <div class="text-sm text-gray-500 mb-2">
                                        Par {{ $course->instructor->name }}
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-blue-600 font-bold">
                                            @if($course->price > 0)
                                                {{ number_format($course->price, 2) }} €
                                            @else
                                                Gratuit
                                            @endif
                                        </span>
                                        <a href="{{ route('courses.show', $course) }}"
                                           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                            Voir le cours
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-600">Aucun cours disponible pour le moment.</p>
                @endif

                <div class="mt-6 text-center">
                    <a href="{{ route('courses.index') }}"
                       class="inline-block bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-700">
                        Voir tous les cours
                    </a>
                </div>
            </div>

            {{-- Catégories --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-6">Catégories</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach($categories as $category)
                        <a href="{{ route('courses.index', ['category' => $category->id]) }}"
                           class="border rounded-lg p-4 hover:shadow-lg transition text-center">
                            <div class="font-bold">{{ $category->name }}</div>
                            <div class="text-sm text-gray-600">{{ $category->courses_count }} cours</div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
