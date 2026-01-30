@props(['value' => null])
<h2 class="font-bold text-lg text-gray-900 line-clamp-1">
    {{ $value }}
    {{  $slot }}
</h2>
