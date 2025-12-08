<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Message de bienvenue -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-2">
                        👋 Bienvenue, {{ Auth::user()->name }} !
                    </h3>
                    <p class="text-gray-600">
                        Vous êtes connecté en tant que <span class="font-semibold">{{ Auth::user()->role }}</span>
                    </p>
                </div>
            </div>

            <!-- Statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

                <!-- Mes cours -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-blue-100 text-sm font-medium">Mes cours</p>
                            <p class="text-3xl font-bold mt-2">
                                {{ Auth::user()->enrollments->count() }}
                            </p>
                        </div>
                        <div class="text-5xl opacity-50">📚</div>
                    </div>
                    <a href="{{ route('courses.index') }}" class="mt-4 block text-sm text-blue-100 hover:text-white">
                        Voir tous les cours →
                    </a>
                </div>

                <!-- Cours en cours -->
                <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-green-100 text-sm font-medium">En cours</p>
                            <p class="text-3xl font-bold mt-2">
                                {{ Auth::user()->enrollments()->where('progress', '<', 100)->count() }}
                            </p>
                        </div>
                        <div class="text-5xl opacity-50">📖</div>
                    </div>
                </div>

                <!-- Cours complétés -->
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-purple-100 text-sm font-medium">Complétés</p>
                            <p class="text-3xl font-bold mt-2">
                                {{ Auth::user()->enrollments()->where('progress', 100)->count() }}
                            </p>
                        </div>
                        <div class="text-5xl opacity-50">✅</div>
                    </div>
                </div>

            </div>

            <!-- Mes cours récents -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">📚 Mes cours récents</h3>

                    @if(Auth::user()->enrollments->count() > 0)
                        <div class="space-y-4">
                            @foreach(Auth::user()->enrollments->take(5) as $enrollment)
                                <div class="border rounded-lg p-4 hover:bg-gray-50 transition">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-900">
                                                {{ $enrollment->course->title }}
                                            </h4>
                                            <p class="text-sm text-gray-600 mt-1">
                                                {{ Str::limit($enrollment->course->description, 100) }}
                                            </p>

                                            <!-- Barre de progression -->
                                            <div class="mt-3">
                                                <div class="flex items-center justify-between text-sm mb-1">
                                                    <span class="text-gray-600">Progression</span>
                                                    <span class="font-semibold text-indigo-600">{{ $enrollment->progress }}%</span>
                                                </div>
                                                <div class="w-full bg-gray-200 rounded-full h-2">
                                                    <div class="bg-indigo-600 h-2 rounded-full transition-all"
                                                         style="width: {{ $enrollment->progress }}%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ml-4">
                                            <a href="{{ route('courses.show', $enrollment->course) }}"
                                               class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                                                Continuer
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-12">
                            <div class="text-6xl mb-4">📚</div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Aucun cours pour le moment
                            </h4>
                            <p class="text-gray-600 mb-6">
                                Commencez votre parcours d'apprentissage dès maintenant !
                            </p>
                            <a href="{{ route('courses.index') }}"
                               class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                                Explorer les cours
                            </a>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
