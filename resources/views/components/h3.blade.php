@props(['value' => null])
<h3 {{ $attributes->merge(['class' => 'font-bold text-md text-gray-900']) }}>
    {{ $value }}
    {{  $slot }}
</h3>