<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon Tableau de Bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Statistiques --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">Cours inscrits</div>
                    <div class="text-3xl font-bold">{{ $stats['total_enrollments'] }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">Cours terminés</div>
                    <div class="text-3xl font-bold text-green-600">{{ $stats['completed_courses'] }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">En cours</div>
                    <div class="text-3xl font-bold text-blue-600">{{ $stats['in_progress_courses'] }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="text-gray-500 text-sm">Score moyen quiz</div>
                    <div class="text-3xl font-bold text-purple-600">{{ round($stats['average_quiz_score'], 1) }}%</div>
                </div>
            </div>

            {{-- Mes cours --}}
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold mb-4">Mes Cours</h3>

                @forelse($enrollments as $enrollment)
                    <div class="border-b pb-4 mb-4 last:border-0">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-semibold">{{ $enrollment->course->title }}</h4>
                                <p class="text-sm text-gray-500">Par {{ $enrollment->course->instructor->name }}</p>
                            </div>
                            <span class="text-sm text-gray-600">{{ $enrollment->progress_percentage }}%</span>
                        </div>

                        {{-- Barre de progression --}}
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $enrollment->progress_percentage }}%"></div>
                        </div>

                        <a href="{{ route('courses.show', $enrollment->course) }}"
                           class="text-blue-600 text-sm mt-2 inline-block hover:underline">
                            Continuer le cours →
                        </a>
                    </div>
                @empty
                    <p class="text-gray-500">Vous n'êtes inscrit à aucun cours pour le moment.</p>
                    <a href="{{ route('courses.index') }}" class="text-blue-600 hover:underline">Découvrir les cours</a>
                @endforelse
            </div>

            {{-- Derniers quiz --}}
            @if($recent_quiz_attempts->count() > 0)
                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Mes Derniers Quiz</h3>

                    <div class="space-y-3">
                        @foreach($recent_quiz_attempts as $attempt)
                            <div class="flex justify-between items-center border-b pb-2">
                                <div>
                                    <div class="font-medium">{{ $attempt->quiz->title }}</div>
                                    <div class="text-sm text-gray-500">{{ $attempt->quiz->lesson->course->title }}</div>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold {{ $attempt->score >= 50 ? 'text-green-600' : 'text-red-600' }}">
                                        {{ $attempt->score }}%
                                    </div>
                                    <div class="text-xs text-gray-500">{{ $attempt->completed_at?->diffForHumans() }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
