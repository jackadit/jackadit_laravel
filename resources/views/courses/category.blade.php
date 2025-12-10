<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $category->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($courses->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($courses as $course)
                        <div class="bg-white rounded-lg shadow p-6">
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

                <div class="mt-8">
                    {{ $courses->links() }}
                </div>
            @else
                <p class="text-center text-gray-500 py-12">Aucun cours dans cette catégorie.</p>
            @endif
        </div>
    </div>
</x-app-layout>
