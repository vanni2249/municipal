<div class="space-y-2">
    @foreach ($links as $item)
        <x-sidebar-link href="{{ route($item['route']) }}" @class([
            'bg-gray-800' => request()->segment(2) == $item['path'],
        ])>
            {{ $item['name'] }}
        </x-sidebar-link>
    @endforeach
</div>
