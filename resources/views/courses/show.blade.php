<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $course->title }}
            </h2>

            @can('update', $course)
                <a href="{{ route('courses.edit', $course) }}"
                   class="text-sm text-blue-600 hover:underline">
                    ✏️ Modifier le cours
                </a>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- 📌 CONTENU PRINCIPAL -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow overflow-hidden">

                        <!-- Image de couverture -->
                        @if($course->thumbnail)
                            <img src="{{ Storage::url($course->thumbnail) }}"
                                 alt="{{ $course->title }}"
                                 class="w-full h-64 object-cover">
                        @else
                            <div class="w-full h-64 bg-gradient-to-r from-blue-400 to-indigo-600 flex items-center justify-center">
                                <span class="text-white text-6xl">{{ $course->type_icon }}</span>
                            </div>
                        @endif

                        <div class="p-8">

                            <!-- Métadonnées du cours -->
                            <div class="flex items-center gap-4 mb-6 flex-wrap">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $course->category->name }}
                                </span>

                                <span class="text-gray-600 text-sm">
                                    Par <strong class="text-gray-900">{{ $course->instructor->name }}</strong>
                                </span>

                                @if($course->level)
                                    <span class="text-gray-600 text-sm">
                                        📊 Niveau : <strong>{{ ucfirst($course->level) }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Titre -->
                            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                                {{ $course->title }}
                            </h1>

                            <!-- Description -->
                            <div class="prose max-w-none mb-8 text-gray-700">
                                {!! nl2br(e($course->description)) !!}
                            </div>

                            <!-- Contenu du cours -->
                            <div class="border-t pt-6">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                    📚 Contenu du cours
                                </h2>

                                @if($course->lessons->count() > 0)
                                    <div class="space-y-3">
                                        @foreach($course->lessons->sortBy('order') as $index => $lesson)
                                            <div class="bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center gap-3 flex-1">
                                                        <!-- Numéro de leçon -->
                                                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm font-bold">
                                                            {{ $index + 1 }}
                                                        </span>

                                                        <!-- Icône du type -->
                                                        <span class="text-2xl">{{ $lesson->type_icon }}</span>

                                                        <!-- Infos de la leçon -->
                                                        <div class="flex-1">
                                                            <h3 class="font-semibold text-gray-900">
                                                                {{ $lesson->title }}
                                                            </h3>
                                                            <div class="flex items-center gap-3 text-sm text-gray-600 mt-1">
                                                                <span>⏱️ {{ $lesson->formatted_duration }}</span>

                                                                @if($lesson->is_free)
                                                                    <span class="text-green-600 font-medium">🆓 Gratuit</span>
                                                                @endif

                                                                @auth
                                                                    @if($lesson->is_completed)
                                                                        <span class="text-green-600 font-medium">✅ Complétée</span>
                                                                    @endif
                                                                @endauth
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Bouton d'action -->
                                                    <div class="ml-4">
                                                        @auth
                                                            @if(auth()->user()->enrollments()->where('course_id', $course->id)->exists() || $lesson->is_free)
                                                                <a href="{{ route('lessons.show', $lesson) }}"
                                                                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
                                                                    @if($lesson->is_completed)
                                                                        Revoir
                                                                    @else
                                                                        Commencer
                                                                    @endif
                                                                    →
                                                                </a>
                                                            @else
                                                                <span class="text-gray-400 text-2xl">🔒</span>
                                                            @endif
                                                        @else
                                                            @if($lesson->is_free)
                                                                <a href="{{ route('lessons.show', $lesson) }}"
                                                                   class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                                                    Aperçu gratuit →
                                                                </a>
                                                            @else
                                                                <span class="text-gray-400 text-2xl">🔒</span>
                                                            @endif
                                                        @endauth
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="text-center py-12 text-gray-500">
                                        <p class="text-lg">📭 Aucune leçon disponible pour le moment.</p>

                                        @can('update', $course)
                                            <a href="{{ route('lessons.create', ['course' => $course->id]) }}"
                                               class="mt-4 inline-block text-blue-600 hover:underline">
                                                ➕ Ajouter la première leçon
                                            </a>
                                        @endcan
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 📌 SIDEBAR -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow p-6 sticky top-6">

                        <!-- Prix -->
                        <div class="text-center mb-6">
                            <div class="text-4xl font-bold text-blue-600 mb-2">
                                @if($course->price > 0)
                                    {{ number_format($course->price, 2, ',', ' ') }} €
                                @else
                                    <span class="text-green-600">Gratuit</span>
                                @endif
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        @auth
                            @if(auth()->user()->enrollments()->where('course_id', $course->id)->exists())
                                <a href="{{ route('lessons.show', $course->lessons->first() ?? '#') }}"
                                   class="block w-full bg-green-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-green-700 transition mb-4">
                                    ✅ Reprendre le cours
                                </a>

                                <!-- Barre de progression -->
                                @php
                                    $totalLessons = $course->lessons->count();
                                    $completedLessons = auth()->user()->lessonCompletions()
                                        ->whereHas('lesson', fn($q) => $q->where('course_id', $course->id))
                                        ->count();
                                    $progress = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;
                                @endphp

                                <div class="mb-4">
                                    <div class="flex justify-between text-sm text-gray-600 mb-2">
                                        <span>Progression</span>
                                        <span class="font-bold">{{ $progress }}%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-600 h-2 rounded-full transition-all"
                                             style="width: {{ $progress }}%"></div>
                                    </div>
                                </div>
                            @else
                                <form action="{{ route('student.enroll', $course) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <button type="submit"
                                            class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-700 transition mb-4">
                                        🚀 S'inscrire maintenant
                                    </button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}"
                               class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-700 transition mb-4">
                                🔐 Connectez-vous pour vous inscrire
                            </a>
                        @endauth

                        <!-- Statistiques du cours -->
                        <div class="space-y-4 text-sm border-t pt-4">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                                <span class="text-gray-700">
                                    <strong>{{ $course->lessons->count() }}</strong> leçon{{ $course->lessons->count() > 1 ? 's' : '' }}
                                </span>
                            </div>

                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-gray-700">
                                    <strong>{{ $course->duration_minutes }}</strong> min au total
                                </span>
                            </div>

                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                <span class="text-gray-700">
                                    <strong>{{ $course->enrollments->count() }}</strong> inscrit{{ $course->enrollments->count() > 1 ? 's' : '' }}
                                </span>
                            </div>

                            @if($course->created_at)
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-gray-700">
                                        Créé le <strong>{{ $course->created_at->format('d/m/Y') }}</strong>
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
