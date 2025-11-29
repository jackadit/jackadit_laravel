<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metaDescription ?? 'Jackadit - Formations et tutoriels développement web' }}">
    <title>{{ $pageTitle ?? 'Jackadit' }} - Formations Web</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @stack('styles')
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 font-['Inter',sans-serif] antialiased">

<!-- Header -->
<x-header />

<!-- Contenu principal -->
<main class="min-h-[calc(100vh-theme(spacing.80))]">
    @yield('content')
</main>

<!-- Footer -->
<x-footer />

@stack('scripts')
</body>
</html>
