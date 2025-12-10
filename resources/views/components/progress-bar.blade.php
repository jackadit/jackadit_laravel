@props(['progress' => 0, 'showLabel' => true])

<div class="w-full">
    @if($showLabel)
        <div class="flex justify-between mb-1 text-sm">
            <span class="font-medium text-gray-700">Progression</span>
            <span class="text-gray-600">{{ round($progress) }}%</span>
        </div>
    @endif

    <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div
            class="h-2.5 rounded-full transition-all duration-500 {{ $progress >= 100 ? 'bg-green-600' : 'bg-blue-600' }}"
            style="width: {{ min($progress, 100) }}%"
        ></div>
    </div>
</div>
