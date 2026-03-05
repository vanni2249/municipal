@props(['array' => [['label' => null, 'href' => null]]])

<ul class="hidden lg:flex space-x-1 text-xs text-gray-500 items-center">
    @foreach ($array as $i => $item)
        <li>
            @if ($item['href'])
                <a href="{{ $item['href'] }}" class="hover:underline" wire:navigate>
                    {{ $item['label'] }}
                </a>
            @else
                {{ $item['label'] }}
            @endif
        </li>
        @if ($i < count($array) - 1)
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-badge-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 7h-6l4 5l-4 5h6l4 -5l-4 -5" />
                </svg>
            </li>
        @endif
    @endforeach
</ul>
