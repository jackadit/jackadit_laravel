@props(['course'])

<div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
    <!-- Image -->
    <div class="relative h-48 bg-gradient-to-br from-blue-500 to-purple-600">
        @if($course->thumbnail)
            <img src="{{ Storage::url($course->thumbnail) }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
        @else
            <div class="flex items-center justify-center h-full">
                <span class="text-white text-4xl font-bold">{{ substr($course->title, 0, 1) }}</span>
            </div>
        @endif

        <!-- Badge niveau -->
        <span class="absolute top-2 right-2 bg-white px-2 py-1 rounded text-xs font-medium">
            @switch($course->level)
                @case('beginner') Débutant @break
                @case('intermediate') Intermédiaire @break
                @case('advanced') Avancé @break
            @endswitch
        </span>
    </div>

    <!-- Contenu -->
    <div class="p-4">
        <!-- Catégorie -->
        <p class="text-xs text-blue-600 font-medium mb-1">{{ $course->category->name }}</p>

        <!-- Titre -->
        <h3 class="font-semibold text-lg mb-2 line-clamp-2">
            <a href="{{ route('courses.show', $course->slug) }}" class="hover:text-blue-600">
                {{ $course->title }}
            </a>
        </h3>

        <!-- Description courte -->
        <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ Str::limit($course->description, 100) }}</p>

        <!-- Instructeur -->
        <div class="flex items-center mb-4 text-sm text-gray-600">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            {{ $course->instructor->name }}
        </div>

        <!-- Footer : Prix + Stats -->
        <div class="flex justify-between items-center pt-4 border-t">
            <div class="text-sm text-gray-600">
                👥 {{ $course->students_count ?? 0 }} étudiants
            </div>

            <div class="text-right">
                @if($course->price > 0)
                    <span class="text-lg font-bold text-gray-900">{{ number_format($course->price, 2) }}€</span>
                @else
                    <span class="text-lg font-bold text-green-600">Gratuit</span>
                @endif
            </div>
        </div>
    </div>
</div>
