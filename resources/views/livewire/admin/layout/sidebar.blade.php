<div class="space-y-2">
    @foreach ($links as $item)
        @if ($item['show'] ?? true)
            <x-sidebar-link href="{{ $item['route'] }}" @class([
                'bg-gray-800' => request()->segment(3) == $item['path'],
            ])>
                {{ $item['name'] }}
            </x-sidebar-link>
        @endif
    @endforeach
</div>
