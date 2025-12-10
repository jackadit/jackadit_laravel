<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Apprenez à votre rythme
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    Découvrez des milliers de cours en ligne
                </p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('courses.index') }}"
                       class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
                        Explorer les cours
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-blue-600">{{ $stats['total_courses'] }}</div>
                    <div class="text-gray-600 mt-2">Cours</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">{{ $stats['total_students'] }}</div>
                    <div class="text-gray-600 mt-2">Étudiants</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">{{ $stats['total_instructors'] }}</div>
                    <div class="text-gray-600 mt-2">Formateurs</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">{{ number_format($stats['total_hours'] / 60, 0) }}h</div>
                    <div class="text-gray-600 mt-2">De contenu</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cours en vedette -->
    @if($featured_courses->count() > 0)
        <div class="bg-gray-50 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8">Cours en vedette</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($featured_courses as $course)
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-6">
                            <h3 class="font-bold text-lg mb-2">{{ $course->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($course->description, 100) }}</p>
                            <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-bold">
                            {{ $course->price > 0 ? number_format($course->price, 2) . ' €' : 'Gratuit' }}
                        </span>
                                <a href="{{ route('courses.show', $course->slug) }}"
                                   class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                    Voir
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
