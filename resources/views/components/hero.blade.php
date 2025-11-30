@props([
    'title' => '',
    'subtitle' => '',
    'description' => '',
    'ctaText' => '',
    'ctaLink' => '#',
    'secondaryCtaText' => '',
    'secondaryCtaLink' => '#',
    'type' => 'default' // 'home', 'courses', 'default'
])

<section class="relative overflow-hidden {{ $type === 'home' ? 'min-h-[600px]' : 'py-16 lg:py-24' }} flex items-center">

    {{-- Gradient Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiM5Q0EzQUYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6bTAtMzBjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6TTQgMzRjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6bTAtMzBjMC0yLjIxIDEuNzktNCA0LTRzNCAxLjc5IDQgNC0xLjc5IDQtNCA0LTQtMS43OS00LTR6Ij48L3BhdGg+PC9nPjwvZz48L3N2Zz4=')] opacity-40"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="max-w-4xl mx-auto text-center">

            {{-- Badge/Subtitle --}}
            @if($subtitle)
                <div class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full shadow-lg mb-6">
                    @if($type === 'courses')
                        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    @endif
                    <span class="text-sm font-medium text-gray-700">
                        {!! $subtitle !!}
                    </span>
                </div>
            @endif

            {{-- Title --}}
            <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                {!! $title !!}
            </h1>

            {{-- Description --}}
            @if($description)
                <p class="text-lg lg:text-xl text-gray-600 mb-8">
                    {{ $description }}
                </p>
            @endif

            {{-- Slot pour contenu custom (barre de recherche) --}}
            {{ $slot }}

            {{-- CTAs --}}
            @if($ctaText || $secondaryCtaText)
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    @if($ctaText)
                        <a href="{{ $ctaLink }}"
                           class="inline-flex items-center justify-center space-x-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            <span>{{ $ctaText }}</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    @endif

                    @if($secondaryCtaText)
                        <a href="{{ $secondaryCtaLink }}"
                           class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-300 shadow-lg border-2 border-gray-200">
                            {{ $secondaryCtaText }}
                        </a>
                    @endif
                </div>
            @endif

        </div>
    </div>
</section>
