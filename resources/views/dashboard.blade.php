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
                        Vous êtes connecté en tant que
                        <span class="font-semibold capitalize">{{ Auth::user()->role }}</span>
                    </p>
                </div>
            </div>

            {{-- ========================================
                DASHBOARD ÉTUDIANT
            ========================================= --}}
            @if(Auth::user()->hasRole('student'))

                <!-- Statistiques Étudiant -->
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
                        <a href="{{ route('courses.index') }}"
                           class="mt-4 block text-sm text-blue-100 hover:text-white transition">
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
                        <a href="{{ route('student.courses') }}"
                           class="mt-4 block text-sm text-green-100 hover:text-white transition">
                            Continuer l'apprentissage →
                        </a>
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
                                                        <span class="font-semibold text-indigo-600">
                                                            {{ number_format($enrollment->progress, 1) }}%
                                                        </span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                        <div class="bg-indigo-600 h-2.5 rounded-full transition-all duration-500"
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

                            @if(Auth::user()->enrollments->count() > 5)
                                <div class="mt-6 text-center">
                                    <a href="{{ route('student.courses') }}"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        Voir tous mes cours ({{ Auth::user()->enrollments->count() }}) →
                                    </a>
                                </div>
                            @endif

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
                                    <span class="mr-2">🔍</span>
                                    Explorer les cours
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

                {{-- ========================================
                    DASHBOARD INSTRUCTEUR
                ========================================= --}}
            @elseif(Auth::user()->hasRole('instructor'))

                <!-- Statistiques Instructeur -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">

                    <!-- Mes cours créés -->
                    <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-indigo-100 text-sm font-medium">Mes cours</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ Auth::user()->courses->count() }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">📚</div>
                        </div>
                    </div>

                    <!-- Total étudiants -->
                    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-green-100 text-sm font-medium">Étudiants</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ Auth::user()->courses->sum(fn($course) => $course->enrollments->count()) }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">👥</div>
                        </div>
                    </div>

                    <!-- Total leçons -->
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-orange-100 text-sm font-medium">Leçons</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ Auth::user()->courses->sum(fn($course) => $course->lessons->count()) }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">📖</div>
                        </div>
                    </div>

                    <!-- Quiz créés -->
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-purple-100 text-sm font-medium">Quiz</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ Auth::user()->courses->sum(fn($course) => $course->lessons->sum(fn($lesson) => $lesson->quizzes->count())) }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">❓</div>
                        </div>
                    </div>

                </div>

                <!-- Actions rapides -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                    <!-- Créer un cours -->
                    <a href="{{ route('instructor.courses.create') }}"
                       class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition group">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 text-5xl group-hover:scale-110 transition">
                                ➕
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-indigo-600 transition">
                                    Créer un nouveau cours
                                </h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    Commencez à créer du contenu pour vos étudiants
                                </p>
                            </div>
                        </div>
                    </a>

                    <!-- Gérer mes cours -->
                    <a href="{{ route('instructor.courses.index') }}"
                       class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition group">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 text-5xl group-hover:scale-110 transition">
                                ⚙️
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-indigo-600 transition">
                                    Gérer mes cours
                                </h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    Modifier, organiser et publier vos cours
                                </p>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- Mes cours récents -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">📚 Mes derniers cours</h3>

                        @if(Auth::user()->courses->count() > 0)
                            <div class="space-y-4">
                                @foreach(Auth::user()->courses->take(5) as $course)
                                    <div class="border rounded-lg p-4 hover:bg-gray-50 transition">
                                        <div class="flex items-center justify-between">
                                            <div class="flex-1">
                                                <div class="flex items-center gap-3">
                                                    <h4 class="font-semibold text-gray-900">
                                                        {{ $course->title }}
                                                    </h4>
                                                    @if($course->is_published)
                                                        <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">
                                                            ✓ Publié
                                                        </span>
                                                    @else
                                                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">
                                                            🕒 Brouillon
                                                        </span>
                                                    @endif
                                                </div>
                                                <p class="text-sm text-gray-600 mt-1">
                                                    {{ $course->lessons->count() }} leçons •
                                                    {{ $course->enrollments->count() }} étudiants inscrits
                                                </p>
                                            </div>

                                            <div class="ml-4 flex gap-2">
                                                <a href="{{ route('courses.show', $course) }}"
                                                   class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition text-sm">
                                                    👁️ Voir
                                                </a>
                                                <a href="{{ route('instructor.courses.edit', $course) }}"
                                                   class="inline-flex items-center px-3 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition text-sm">
                                                    ✏️ Modifier
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-12">
                                <div class="text-6xl mb-4">🎓</div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                    Aucun cours créé
                                </h4>
                                <p class="text-gray-600 mb-6">
                                    Créez votre premier cours et partagez vos connaissances !
                                </p>
                                <a href="{{ route('instructor.courses.create') }}"
                                   class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                                    <span class="mr-2">➕</span>
                                    Créer mon premier cours
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

                {{-- ========================================
                    DASHBOARD ADMIN
                ========================================= --}}
            @elseif(Auth::user()->hasRole('admin'))

                <!-- Statistiques Globales -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">

                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-blue-100 text-sm font-medium">Utilisateurs</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ \App\Models\User::count() }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">👥</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-green-100 text-sm font-medium">Cours</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ \App\Models\Course::count() }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">📚</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-purple-100 text-sm font-medium">Inscriptions</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ \App\Models\Enrollment::count() }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">✍️</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg shadow-lg p-6 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-orange-100 text-sm font-medium">Leçons</p>
                                <p class="text-3xl font-bold mt-2">
                                    {{ \App\Models\Lesson::count() }}
                                </p>
                            </div>
                            <div class="text-4xl opacity-50">📖</div>
                        </div>
                    </div>

                </div>

                <!-- Actions Admin -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">⚙️ Administration</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="/admin/users" class="p-4 border rounded-lg hover:bg-gray-50 transition">
                                👥 Gérer les utilisateurs
                            </a>
                            <a href="/admin/courses" class="p-4 border rounded-lg hover:bg-gray-50 transition">
                                📚 Gérer les cours
                            </a>
                            <a href="/admin/reports" class="p-4 border rounded-lg hover:bg-gray-50 transition">
                                📊 Rapports et statistiques
                            </a>
                            <a href="/admin/settings" class="p-4 border rounded-lg hover:bg-gray-50 transition">
                                ⚙️ Paramètres système
                            </a>
                        </div>
                    </div>
                </div>

            @endif

        </div>
    </div>
</x-app-layout>
