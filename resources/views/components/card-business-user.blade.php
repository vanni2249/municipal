@props(['code', 'place', 'name', 'type', 'category'])
<div class="flex flex-col space-x-2">
    <div class="flex justify-between items-center">
        <span>
            <x-badge value="{{ $code ?? '...' }}" />
        </span>
        <span
            class="hidden md:block text-gray-600 px-4 text-xs font-bold">{{ $place ?? '...' }}</span>
    </div>
    <div class="flex items-center justify-between py-2">
        <h2 class="text-lg text-gray-800 font-light line-clamp-1">{{ $name }}
        </h2>
    </div>
    <div class="flex flex-wrap space-x-2">
        <span class="border border-blue-400 text-blue-800 px-4 text-xs rounded-full">
            {{ $type ?? '' }}
        </span>
        <span class="border border-blue-400 text-blue-800 px-4 text-xs rounded-full">
            {{ $category ?? '...' }}
        </span>
        
    </div>
</div>
