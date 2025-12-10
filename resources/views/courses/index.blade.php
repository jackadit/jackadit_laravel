<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogue de cours') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Filtres et recherche -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <form method="GET" action="{{ route('courses.index') }}" class="flex gap-4">
                    <input type="text"
                           name="search"
                           value="{{ request('search') }}"
                           placeholder="Rechercher un cours..."
                           class="flex-1 rounded-md border-gray-300">

                    <select name="category" class="rounded-md border-gray-300">
                        <option value="">Toutes les catégories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                        Rechercher
                    </button>
                </form>
            </div>

            <!-- Liste des cours -->
            @if($courses->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($courses as $course)
                        <div class="bg-white rounded-lg shadow hover:shadow-xl transition-shadow overflow-hidden">
                            @if($course->thumbnail)
                                <img src="{{ Storage::url($course->thumbnail) }}"
                                     alt="{{ $course->title }}"
                                     class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gradient-to-r from-blue-400 to-indigo-600"></div>
                            @endif

                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 line-clamp-2">{{ $course->title }}</h3>

                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ $course->description }}
                                </p>

                                <div class="flex items-center gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">
                                    {{ $course->category->name }}
                                </span>
                                    <span class="text-gray-500 text-xs">
                                    Par {{ $course->instructor->name }}
                                </span>
                                </div>

                                <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">
                                    @if($course->price > 0)
                                        {{ number_format($course->price, 2) }} €
                                    @else
                                        <span class="text-green-600">Gratuit</span>
                                    @endif
                                </span>

                                    <a href="{{ route('courses.show', $course->slug) }}"
                                       class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                        Voir le cours
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    {{ $courses->links() }}
                </div>
            @else
                <div class="bg-white rounded-lg shadow p-12 text-center">
                    <p class="text-gray-500 text-lg">Aucun cours trouvé.</p>
                    <a href="{{ route('courses.index') }}" class="text-blue-600 hover:underline mt-4 inline-block">
                        Réinitialiser les filtres
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
