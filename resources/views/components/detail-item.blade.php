@props(['label', 'value'])
<ul class="md:bg-gray-100 md:p-4 md:rounded-lg">
    <li class="text-sm font-bold text-gray-800">{{ $label }}</li>
    <li class="text-gray-600 line-clamp-1">{{ $value }}</li>
</ul>
