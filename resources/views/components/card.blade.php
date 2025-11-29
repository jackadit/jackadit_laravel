@props([
    'title' => '',
    'description' => '',
    'icon' => '',
    'href' => '#',
    'badge' => null,
    'stats' => null,
    'difficulty' => null,
    'type' => 'default'
])

<a href="{{ $href }}"
   class="group block bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 border border-gray-100 h-full flex flex-col">

    <!-- Header avec icon/badge - HAUTEUR AUGMENTÉE -->
    <div class="relative bg-gradient-to-br from-blue-50 to-purple-50 p-8 min-h-[140px] flex items-start">
        @if($icon)
            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                {!! $icon !!}
            </div>
        @endif

        @if($badge)
            <span class="absolute top-4 right-4 px-3 py-1.5 text-xs font-semibold rounded-full backdrop-blur-sm whitespace-nowrap
                         {{ $badge['color'] ?? 'bg-blue-100 text-blue-700' }}">
                {{ $badge['text'] }}
            </span>
        @endif

        @if($difficulty)
            <div class="absolute bottom-4 right-4 flex items-center space-x-1">
                @for($i = 0; $i < 3; $i++)
                    <div class="w-2 h-2 rounded-full {{ $i < $difficulty ? 'bg-blue-600' : 'bg-gray-300' }}"></div>
                @endfor
            </div>
        @endif
    </div>

    <!-- Contenu - FLEX-GROW POUR REMPLIR L'ESPACE -->
    <div class="p-6 flex-grow flex flex-col">
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
            {{ $title }}
        </h3>

        @if($description)
            <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-grow">
                {{ $description }}
            </p>
        @endif

        <!-- Stats -->
        @if($stats)
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 pt-4 border-t border-gray-100 mt-auto">
                @if(isset($stats['lessons']))
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span class="whitespace-nowrap">{{ $stats['lessons'] }} leçons</span>
                    </div>
                @endif

                @if(isset($stats['duration']))
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="whitespace-nowrap">{{ $stats['duration'] }}</span>
                    </div>
                @endif

                @if(isset($stats['level']))
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="whitespace-nowrap">{{ $stats['level'] }}</span>
                    </div>
                @endif
            </div>
        @endif

        <!-- Slot pour contenu custom -->
        @if($slot->isNotEmpty())
            <div class="mt-4">
                {{ $slot }}
            </div>
        @endif
    </div>

    <!-- Footer avec action -->
    <div class="px-6 pb-6">
        <div class="flex items-center justify-between text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
            <span>{{ $type === 'category' ? 'Explorer' : 'Commencer' }}</span>
            <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
        </div>
    </div>
</a>
