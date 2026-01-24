@props(['color' => 'bg-white'])

<div {{ $attributes->merge(['class' => $color . ' p-4 space-y-4 rounded-xl']) }}>
    {{ $slot }} 
</div>