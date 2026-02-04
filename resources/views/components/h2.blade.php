@props(['value' => null])
<h2 {{ $attributes->merge(['class' => 'font-bold text-lg text-gray-900']) }}>
    {{ $value }}
    {{  $slot }}
</h2>
