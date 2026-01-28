@props(['variant' => 'success', 'label' => null])


@php
    $variants = [
        'primary' => 'bg-blue-300 text-blue-700',
        'primary-outline' => 'border border-blue-700 text-blue-700 bg-transparent',
        'secondary' => 'bg-gray-200 text-gray-700',
        'secondary-outline' => 'border border-gray-700 text-gray-700 bg-transparent',
        'success' => 'bg-green-300 text-green-700',
        'success-outline' => 'border border-green-700 text-green-700 bg-transparent',
        'danger' => 'bg-red-300 text-red-700',
        'danger-outline' => 'border border-red-700 text-red-700 bg-transparent',
        'warning' => 'bg-yellow-300 text-yellow-800',
        'warning-outline' => 'border border-yellow-800 text-yellow-800 bg-transparent',
        'info' => 'bg-teal-300 text-teal-700',
        'info-outline' => 'border border-teal-700 text-teal-700 bg-transparent',
        'light' => 'border border-gray-400 bg-white text-gray-800',
        'light-outline' => 'border border-gray-800 text-gray-800 bg-transparent',
        'dark' => 'bg-gray-800 text-white',
        'dark-outline' => 'border border-white text-white bg-transparent',
    ];
@endphp

<span {{ $attributes->merge(['class' => "px-3 py-0.5 rounded text-xs font-semibold {$variants[$variant]}"]) }}>
    {{ $label ?? '' }}
</span>
