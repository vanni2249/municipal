@props(['value' => null])
<h1 {{ $attributes->merge(['class' => 'font-bold text-xl text-gray-900']) }}>
    {{ $value }}
    {{ $slot }}
</h1>
