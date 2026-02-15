@props(['value' => null])
<h2 {{ $attributes->merge(['class' => 'font-bold text-xl text-gray-900 line-clamp-1']) }}>
    {{ $value }}
    {{ $slot }}
</h2>
