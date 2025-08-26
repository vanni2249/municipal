@props(['code', 'place', 'name', 'type', 'category'])
<div class="flex flex-col">
    <div class="flex justify-between items-center">
        <span>
            <x-badge value="{{ $code ?? '...' }}" />
        </span>
        <span
            class=" text-gray-600 text-xs font-bold">{{ $place ?? '...' }}</span>
    </div>
    <div class="flex items-center justify-between py-2">
        <h2 class="text-md text-gray-700 font-bold line-clamp-1">{{ $name }}
        </h2>
    </div>
    <div class="flex flex-wrap gap-2">
        <x-badge value="{{ $type ?? '' }}" color="gray-outline"/>
        <x-badge value="{{ $category ?? '...' }}" color="gray-outline"/>
    </div>
</div>
