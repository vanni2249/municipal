@props([
    'icon' => '',
    'variant' => 'secondary',
    'title' => '',
    'subtitle' => '',
    'value' => '',
])

@php
    $variants = [
        'primary' => 'blue',
        'secondary' => 'gray',
        'success' => 'green',
        'danger' => 'red',
        'warning' => 'yellow',
        'info' => 'teal',
        'light' => 'gray',
        'dark' => 'gray',
    ];
@endphp

<div
    {{ $attributes->merge(['class' => 'border-gray-400 border-l-4 bg-white p-2 md:p-4 rounded-xl h-full hover:shadow-lg transition-shadow duration-300']) }}>
    <a href="{{ $attributes['href'] ?? '#' }}" class="flex flex-col h-full">

        <div class="flex flex-col h-full">
            <header class="flex justify-between  items-center">
                <div class="flex items-center space-x-1">
                    <div class="bg-gray-200  p-1.5 rounded-full">
                        <x-icon :icon="$icon" width="16" height="16" class="text-gray-600" />
                    </div>
                    <span class="text-xs text-gray-800 uppercase font-bold">
                        {{ $title }}
                    </span>
                </div>
                <x-icon icon="arrow-up-right" class="w-5 h-5 text-gray-400" />
            </header>
            <span class="text-lg lg:text-xl text-gray-800 font-bold mt-1">{{ $value }}</span>
            <footer>
                <span class="text-xs text-gray-700">
                    {{ $subtitle }}
                </span>
            </footer>
        </div>
    </a>

</div>
