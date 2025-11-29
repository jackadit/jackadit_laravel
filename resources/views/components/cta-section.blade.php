@props([
    'title' => 'Prêt à commencer ?',
    'description' => 'Rejoins des milliers d\'apprenants',
    'ctaText' => 'Commencer maintenant',
    'ctaLink' => '#'
])

<section class="relative py-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-r from-primary-600 via-purple-600 to-blue-600">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjEiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-20"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-white mb-6">
                {{ $title }}
            </h2>

            <p class="text-xl text-blue-100 mb-8">
                {{ $description }}
            </p>

            {{ $slot }}

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ $ctaLink }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-bold rounded-xl hover:bg-gray-50 transform hover:scale-105 transition-all shadow-xl">
                    {{ $ctaText }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
