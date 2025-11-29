@props([
    'value' => '0',
    'label' => '',
    'icon' => null,
    'color' => 'primary' // primary | success | warning | info
])

@php
    $colorClasses = match($color) {
        'primary' => 'from-primary-600 to-purple-600',
        'success' => 'from-green-600 to-emerald-600',
        'warning' => 'from-orange-600 to-yellow-600',
        'info' => 'from-blue-600 to-cyan-600',
        default => 'from-primary-600 to-purple-600'
    };
@endphp

<div class="relative group">
    <div class="absolute -inset-0.5 bg-gradient-to-r {{ $colorClasses }} rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
    <div class="relative bg-white rounded-2xl p-6 shadow-lg">
        @if($icon)
            <div class="w-12 h-12 bg-gradient-to-br {{ $colorClasses }} rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 transition-transform">
                {!! $icon !!}
            </div>
        @endif

        <div class="text-3xl font-bold bg-gradient-to-r {{ $colorClasses }} bg-clip-text text-transparent mb-1">
            {{ $value }}
        </div>

        <div class="text-sm text-gray-600 font-medium">
            {{ $label }}
        </div>
    </div>
</div>
