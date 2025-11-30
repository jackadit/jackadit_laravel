@extends('layouts.app')

@section('title', $lesson['titre'] . ' - ' . $categoryInfo['titre'] . ' - JackAdIT')

@section('content')
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <a href="{{ route('cours.index') }}">📚 Cours</a>
            <span>/</span>
            <a href="{{ route('cours.category', $category) }}">{{ $categoryInfo['titre'] }}</a>
            <span>/</span>
            <span>Leçon {{ $lesson['number'] }}</span>
        </nav>

        <!-- En-tête de la leçon -->
        <div class="lesson-header">
            <div class="lesson-meta">
                <span class="lesson-icon">{{ $categoryInfo['icone'] }}</span>
                <span class="lesson-category">{{ $categoryInfo['titre'] }} - Leçon {{ $lesson['number'] }}</span>
            </div>
            <h1>{{ $lesson['titre'] }}</h1>
        </div>

        <!-- Contenu de la leçon -->
        <div class="content-box lesson-content">
            {!! $lesson['content'] !!}
        </div>

        <!-- Navigation précédent/suivant -->
        <div class="lesson-navigation">
            @if($navigation['prev'])
                <a href="{{ $navigation['prev']['url'] }}" class="nav-button prev">
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    <span class="nav-content">
                    <span class="nav-label">Précédent</span>
                    <span class="nav-title">{{ $navigation['prev']['titre'] }}</span>
                </span>
                </a>
            @else
                <div></div>
            @endif

            @if($navigation['next'])
                <a href="{{ $navigation['next']['url'] }}" class="nav-button next">
                <span class="nav-content">
                    <span class="nav-label">Suivant</span>
                    <span class="nav-title">{{ $navigation['next']['titre'] }}</span>
                </span>
                    <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            @endif
        </div>

        <!-- Retour à la liste -->
        <div class="back-link">
            <a href="{{ route('cours.category', $category) }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18M3 18h18"/>
                </svg>
                Retour à la liste des leçons
            </a>
        </div>
    </div>
@endsection
