<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto py-6">
            <!-- En-tête avec navigation cours -->
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <a href="{{ route('courses.show', $lesson->course->slug) }}"
                           class="text-blue-600 hover:underline text-sm">
                            ← Retour au cours : {{ $lesson->course->title }}
                        </a>
                        <h1 class="text-2xl font-bold mt-2">{{ $lesson->title }}</h1>
                    </div>

                    @can('update', $lesson->course)
                        <a href="{{ route('lessons.edit', $lesson->id) }}"
                           class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">
                            Modifier
                        </a>
                    @endcan
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Contenu principal -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-lg shadow p-8">
                        <!-- Vidéo -->
                        @if($lesson->video_url)
                            <div class="mb-8">
                                <div class="aspect-video bg-black rounded-lg overflow-hidden">
                                    <iframe src="{{ $lesson->video_url }}"
                                            class="w-full h-full"
                                            allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        @endif

                        <!-- Description -->
                        @if($lesson->description)
                            <div class="mb-8">
                                <h2 class="text-xl font-bold mb-4">Description</h2>
                                <div class="prose max-w-none">
                                    {!! nl2br(e($lesson->description)) !!}
                                </div>
                            </div>
                        @endif

                        <!-- Contenu -->
                        @if($lesson->content)
                            <div class="mb-8">
                                <h2 class="text-xl font-bold mb-4">Contenu de la leçon</h2>
                                <div class="prose max-w-none">
                                    {!! nl2br(e($lesson->content)) !!}
                                </div>
                            </div>
                        @endif

                        <!-- Ressources téléchargeables -->
                        @if($lesson->attachments)
                            <div class="mb-8">
                                <h2 class="text-xl font-bold mb-4">Ressources</h2>
                                <div class="space-y-2">
                                    @foreach(json_decode($lesson->attachments) as $file)
                                        <a href="{{ Storage::url($file) }}"
                                           class="flex items-center gap-2 p-3 bg-gray-50 rounded-lg hover:bg-gray-100"
                                           download>
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            <span>{{ basename($file) }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Navigation leçons -->
                        <div class="flex justify-between mt-8 pt-8 border-t">
                            @if($previousLesson)
                                <a href="{{ route('lessons.show', $previousLesson->id) }}"
                                   class="bg-gray-600 text-white px-6 py-3 rounded-md hover:bg-gray-700">
                                    ← Leçon précédente
                                </a>
                            @else
                                <div></div>
                            @endif

                            @if($nextLesson)
                                <a href="{{ route('lessons.show', $nextLesson->id) }}"
                                   class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">
                                    Leçon suivante →
                                </a>
                            @else
                                <a href="{{ route('courses.show', $lesson->course->slug) }}"
                                   class="bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700">
                                    Cours terminé ✓
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Sidebar : Liste des leçons -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow p-6 sticky top-6">
                        <h3 class="font-bold mb-4">Contenu du cours</h3>
                        <ul class="space-y-2">
                            @foreach($lesson->course->lessons->sortBy('order') as $courseLesson)
                                <li>
                                    <a href="{{ route('lessons.show', $courseLesson->id) }}"
                                       class="block p-3 rounded-lg {{ $courseLesson->id == $lesson->id ? 'bg-blue-100 text-blue-800 font-semibold' : 'hover:bg-gray-100' }}">
                                        <div class="flex items-center gap-2">
                                            @if($courseLesson->id == $lesson->id)
                                                ▶️
                                            @else
                                                {{ $courseLesson->order }}.
                                            @endif
                                            <span class="text-sm">{{ $courseLesson->title }}</span>
                                        </div>
                                        @if($courseLesson->duration_minutes)
                                            <span class="text-xs text-gray-500">{{ $courseLesson->duration_minutes }} min</span>
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
