<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard Administrateur') }}
            </h2>
            <div class="flex gap-2">
                <a href="{{ route('admin.courses.create') }}"
                   class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    + Nouveau cours
                </a>
                <form method="POST" action="{{ route('admin.cache.clear') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                        🗑️ Vider le cache
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- ================================== --}}
            {{-- STATISTIQUES GLOBALES --}}
            {{-- ================================== --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                {{-- Total Utilisateurs --}}
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white overflow-hidden shadow-lg rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-blue-100 text-sm font-medium">Total Utilisateurs</div>
                            <div class="text-3xl font-bold mt-2">{{ $stats['total_users'] }}</div>
                            <div class="text-xs text-blue-100 mt-1">
                                {{ $stats['total_students'] }} étudiants • {{ $stats['total_instructors'] }} instructeurs
                            </div>
                        </div>
                        <div class="text-5xl opacity-20">
                            <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Total Cours --}}
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white overflow-hidden shadow-lg rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-green-100 text-sm font-medium">Total Cours</div>
                            <div class="text-3xl font-bold mt-2">{{ $stats['total_courses'] }}</div>
                            <div class="text-xs text-green-100 mt-1">
                                {{ $stats['published_courses'] }} publiés • {{ $stats['pending_courses'] }} brouillons
                            </div>
                        </div>
                        <div class="text-5xl opacity-20">
                            <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Total Inscriptions --}}
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white overflow-hidden shadow-lg rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-purple-100 text-sm font-medium">Total Inscriptions</div>
                            <div class="text-3xl font-bold mt-2">{{ $stats['total_enrollments'] }}</div>
                            <div class="text-xs text-purple-100 mt-1">
                                Toutes les inscriptions actives
                            </div>
                        </div>
                        <div class="text-5xl opacity-20">
                            <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Revenus Totaux --}}
                <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white overflow-hidden shadow-lg rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-orange-100 text-sm font-medium">Revenus Totaux</div>
                            <div class="text-3xl font-bold mt-2">{{ number_format($stats['total_revenue'], 0) }} €</div>
                            <div class="text-xs text-orange-100 mt-1">
                                Depuis le lancement
                            </div>
                        </div>
                        <div class="text-5xl opacity-20">
                            <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ================================== --}}
            {{-- DERNIERS COURS CRÉÉS --}}
            {{-- ================================== --}}
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">📚 Derniers Cours Créés</h3>
                        <a href="{{ route('admin.courses.index') }}" class="text-blue-600 hover:underline text-sm">
                            Voir tous les cours →
                        </a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="space-y-4">
                        @forelse($recent_courses as $course)
                            <div class="flex items-center justify-between border-b pb-4 last:border-0">
                                <div class="flex items-start gap-4 flex-1">
                                    @if($course->thumbnail)
                                        <img src="{{ Storage::url($course->thumbnail) }}"
                                             alt="{{ $course->title }}"
                                             class="w-20 h-20 object-cover rounded">
                                    @else
                                        <div class="w-20 h-20 bg-gray-200 rounded flex items-center justify-center">
                                            <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                                            </svg>
                                        </div>
                                    @endif

                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <h4 class="font-semibold text-gray-800">{{ $course->title }}</h4>
                                            @if($course->is_published)
                                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Publié</span>
                                            @else
                                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Brouillon</span>
                                            @endif
                                            @if($course->is_featured)
                                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">⭐ En vedette</span>
                                            @endif
                                        </div>
                                        <p class="text-sm text-gray-500 mt-1">
                                            Par <span class="font-medium">{{ $course->instructor->name }}</span>
                                            • {{ $course->category->name }}
                                            • {{ $course->created_at->diffForHumans() }}
                                        </p>
                                        <p class="text-sm text-gray-600 mt-2">{{ Str::limit($course->description, 100) }}</p>
                                    </div>
                                </div>

                                <div class="flex gap-2">
                                    <a href="{{ route('courses.show', $course) }}"
                                       class="text-blue-600 hover:underline text-sm">
                                        Voir
                                    </a>
                                    <a href="{{ route('admin.courses.edit', $course) }}"
                                       class="text-gray-600 hover:underline text-sm">
                                        Modifier
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-4">Aucun cours disponible</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- ================================== --}}
                {{-- DERNIÈRES INSCRIPTIONS --}}
                {{-- ================================== --}}
                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">👥 Dernières Inscriptions</h3>
                    </div>

                    <div class="p-6">
                        <div class="space-y-3">
                            @forelse($recent_enrollments as $enrollment)
                                <div class="flex justify-between items-start border-b pb-3 last:border-0">
                                    <div>
                                        <div class="font-medium text-gray-800">{{ $enrollment->user->name }}</div>
                                        <div class="text-sm text-gray-500">{{ $enrollment->course->title }}</div>
                                        <div class="text-xs text-gray-400 mt-1">
                                            {{ $enrollment->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-semibold text-green-600">
                                            {{ number_format($enrollment->price_paid, 2) }} €
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-500 text-center py-4">Aucune inscription récente</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                {{-- ================================== --}}
                {{-- DERNIERS UTILISATEURS INSCRITS --}}
                {{-- ================================== --}}
                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">🆕 Nouveaux Utilisateurs</h3>
                    </div>

                    <div class="p-6">
                        <div class="space-y-3">
                            @forelse($recent_users as $user)
                                <div class="flex justify-between items-center border-b pb-3 last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-800">{{ $user->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs px-2 py-1 rounded-full
                                            {{ $user->role === 'admin' ? 'bg-red-100 text-red-800' : '' }}
                                            {{ $user->role === 'instructor' ? 'bg-blue-100 text-blue-800' : '' }}
                                            {{ $user->role === 'student' ? 'bg-green-100 text-green-800' : '' }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                        <div class="text-xs text-gray-400 mt-1">
                                            {{ $user->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-500 text-center py-4">Aucun utilisateur récent</p>
                            @endforelse
                        </div>
                    </div>
                </div>

            </div>

            {{-- ================================== --}}
            {{-- ACTIONS RAPIDES --}}
            {{-- ================================== --}}
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800">⚡ Actions Rapides</h3>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="{{ route('admin.courses.index') }}"
                           class="flex items-center gap-3 p-4 border-2 border-blue-200 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Gérer les cours</div>
                                <div class="text-sm text-gray-500">Voir tous les cours</div>
                            </div>
                        </a>

                        <a href="{{ route('admin.users.index') }}"
                           class="flex items-center gap-3 p-4 border-2 border-green-200 rounded-lg hover:border-green-500 hover:bg-green-50 transition">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Gérer les utilisateurs</div>
                                <div class="text-sm text-gray-500">Voir tous les utilisateurs</div>
                            </div>
                        </a>

                        <a href="{{ route('admin.categories.index') }}"
                           class="flex items-center gap-3 p-4 border-2 border-purple-200 rounded-lg hover:border-purple-500 hover:bg-purple-50 transition">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-800">Gérer les catégories</div>
                                <div class="text-sm text-gray-500">Voir toutes les catégories</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
