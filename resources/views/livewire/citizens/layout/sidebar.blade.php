<div class="space-y-2">
    @foreach ($links as $item)
        <div class="lg:hidden">
            <x-dropdown-link href="{{ route($item['route']) }}">
                {{ $item['name'] }}
            </x-dropdown-link>
        </div>
        <div class="hidden lg:block">
            <x-sidebar-link href="{{ route($item['route']) }}" @class([
                'bg-gray-800' => request()->segment(2) == $item['path'],
            ])>
                {{ $item['name'] }}
            </x-sidebar-link>
        </div>
    @endforeach
</div>
