@props(['course', 'currentLesson'])

<div class="bg-white rounded-lg shadow p-4">
    <h3 class="font-semibold text-lg mb-4">Contenu du cours</h3>

    @foreach($course->sections as $section)
        <div class="mb-4">
            <h4 class="font-medium text-gray-900 mb-2">{{ $section->title }}</h4>

            <ul class="space-y-1">
                @foreach($section->lessons as $lesson)
                    <li>
                        <a
                            href="{{ route('lessons.show', $lesson->id) }}"
                            class="flex items-center justify-between p-2 rounded hover:bg-gray-50 transition
                                {{ $currentLesson->id == $lesson->id ? 'bg-blue-50 text-blue-700' : 'text-gray-700' }}"
                        >
                            <span class="flex items-center">
                                @if($lesson->type === 'video')
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                @else
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                @endif
                                <span class="text-sm">{{ $lesson->title }}</span>
                            </span>

                            @auth
                                @php
                                    $completed = auth()->user()->completedLessons()->where('lesson_id', $lesson->id)->exists();
                                @endphp
                                @if($completed)
                                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                @endif
                            @endauth
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
