@props([
    'variant' => 'secondary',
    'title' => '',
    'subtitle' => '',
    'value' => '',
])

@php
    $variants = [
        'primary' => ' border-blue-400',
        'secondary' => ' border-gray-400',
        'success' => ' border-green-400',
        'danger' => ' border-red-400',
        'warning' => ' border-yellow-400',
        'info' => ' border-teal-400',
        'light' => ' border-gray-200',
        'dark' => ' border-gray-800',
    ]
@endphp

<div
    {{ $attributes->merge(['class' => $variants[$variant] . ' border-l-4 bg-white p-2 md:p-4 rounded-xl ']) }}>
    <div>
        <header class="flex justify-between items-center">
            <h2 class="text-xs text-gray-600 leading-3 font-bold uppercase">
                {{ $title }}
            </h2>
            <span class="text-xs text-gray-500 leading-3 font-medium">
                {{ $subtitle }}
            </span>
        </header>
        <div class="text-xl text-gray-800 font-bold mt-2">{{ $value }}</div>
    </div>
</div>
