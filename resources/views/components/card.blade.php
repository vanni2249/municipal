@props(['variant' => 'white'])


@php
    $variants = [
        'primary' => 'bg-blue-200 border border-blue-300',
        'secondary' => 'bg-gray-400 border border-gray-500',
        'success' => 'bg-green-200 border border-green-300',
        'danger' => 'bg-red-200 border border-red-300',
        'warning' => 'bg-yellow-200 border border-yellow-300',
        'info' => 'bg-teal-200 border border-teal-300',
        'white' => 'bg-white'
    ];
@endphp

<div {{ $attributes->merge(['class' => $variants[$variant] . ' p-4 space-y-4 rounded-xl']) }}>
    {{ $slot }} 
</div>