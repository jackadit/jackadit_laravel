@props([
    'title' => '',
    'subtitle' => '',
    'description' => '',
    'ctaText' => 'Commencer',
    'ctaLink' => '#',
    'secondaryCtaText' => null,
    'secondaryCtaLink' => '#',
    'type' => 'home' // home | page | small
])

@php
    $classes = match($type) {
        'home' => 'py-20 lg:py-32',
        'page' => 'py-16 lg:py-24',
        'small' => 'py-12 lg:py-16',
        default => 'py-20 lg:py-32'
    };
@endphp

<section class="relative overflow-hidden {{ $classes }}">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-purple-50 to-blue-50">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(99, 102, 241, 0.1) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <!-- Decorative Blobs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-primary-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl {{ $type === 'home' ? 'mx-auto text-center' : '' }}">

            <!-- Subtitle -->
            @if($subtitle)
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-100 text-primary-700 font-semibold text-sm mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    {{ $subtitle }}
                </div>
            @endif

            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-6 leading-tight">
                {!! $title !!}
            </h1>

            <!-- Description -->
            @if($description)
                <p class="text-xl text-gray-600 mb-8 leading-relaxed {{ $type === 'home' ? 'max-w-2xl mx-auto' : '' }}">
                    {{ $description }}
                </p>
            @endif

            <!-- Slot pour contenu custom -->
            {{ $slot }}

            <!-- CTAs -->
            <div class="flex flex-col sm:flex-row gap-4 {{ $type === 'home' ? 'justify-center' : '' }}">
                <a href="{{ $ctaLink }}" class="btn-primary-gradient text-center">
                    {{ $ctaText }}
                    <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>

                @if($secondaryCtaText)
                    <a href="{{ $secondaryCtaLink }}" class="btn-secondary text-center">
                        {{ $secondaryCtaText }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Animations -->
<style>
    @keyframes blob {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
    }
    .animate-blob {
        animation: blob 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    .animation-delay-4000 {
        animation-delay: 4s;
    }
</style>
