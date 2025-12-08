<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard Instructeur') }}
            </h2>
            <a href="{{ route('instructor.courses.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                + Créer un cours
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Statistiques --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">Mes cours</div>
                    <div class="text-3xl font-bold">{{ $stats['total_courses'] }}</div>
                    <div class="text-xs text-gray-400 mt-1">{{ $stats['published_courses'] }} publiés</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">Total étudiants</div>
                    <div class="text-3xl font-bold text-green-600">{{ $stats['total_students'] }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">Leçons créées</div>
                    <div class="text-3xl font-bold text-blue-600">{{ $stats['total_lessons'] }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">Revenus totaux</div>
                    <div class="text-3xl font-bold text-purple-600">{{ number_format($stats['total_revenue'], 2) }} €</div>
                </div>
            </div>

            {{-- Liste des cours --}}
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold mb-4">Mes Cours</h3>

                @forelse($courses as $course)
                    <div class="border-b pb-4 mb-4 last:border-0">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <h4 class="font-semibold">{{ $course->title }}</h4>
                                    @if($course->is_published)
                                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Publié</span>
                                    @else
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Brouillon</span>
                                    @endif
                                </div>
                                <div class="text-sm text-gray-500 mt-1">
                                    {{ $course->enrollments_count }} étudiants • {{ $course->lessons_count }} leçons
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <a href="{{ route('instructor.courses.edit', $course) }}"
                                   class="text-blue-600 hover:underline text-sm">
                                    Modifier
                                </a>
                                <a href="{{ route('courses.show', $course) }}"
                                   class="text-gray-600 hover:underline text-sm">
                                    Voir
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">Vous n'avez pas encore créé de cours.</p>
                @endforelse
            </div>

            {{-- Dernières inscriptions --}}
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Dernières Inscriptions</h3>

                <div class="space-y-3">
                    @foreach($recent_enrollments as $enrollment)
                        <div class="flex justify-between items-center border-b pb-2">
                            <div>
                                <div class="font-medium">{{ $enrollment->user->name }}</div>
                                <div class="text-sm text-gray-500">{{ $enrollment->course->title }}</div>
                            </div>
                            <div class="text-sm text-gray-400">
                                {{ $enrollment->created_at->diffForHumans() }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
