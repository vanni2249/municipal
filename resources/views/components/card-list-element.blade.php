@props(['title' => null])
<li {{ $attributes->merge(['class' => 'text-gray-700']) }}>
    @if ($title)
        <strong class="text-sm text-gray-950">{{ $title }}</strong>
        <br>
    @endif
    {{ $slot }}
</li>