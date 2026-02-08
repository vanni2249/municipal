@props(['variant' => 'white'])


@php
    $variants = [
        'primary' => 'bg-blue-200 border border-blue-400',
        'secondary' => 'bg-gray-400 border border-gray-500',
        'success' => 'bg-green-200 border border-green-400',
        'danger' => 'bg-red-200 border border-red-400',
        'warning' => 'bg-yellow-200 border border-yellow-400',
        'info' => 'bg-teal-200 border border-teal-400',
        'white' => 'bg-white'
    ];
@endphp

<div {{ $attributes->merge(['class' => $variants[$variant] . ' p-4 space-y-4 rounded-xl']) }}>
    {{ $slot }} 
</div>