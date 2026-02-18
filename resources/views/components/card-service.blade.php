@props(['service' => null])


@if ($service)
    <div class="flex-1 flex flex-col lg:flex-row space-x-2 items-start">
        <div class="flex w-full md:w-auto justify-between items-center">
            <div class="bg-blue-100 rounded-full p-2">
                <x-icon icon="{{ $service->icon }}" height="32" width="32" class="text-gray-800 stroke-1" />
            </div>
            <div class="md:hidden">
                <x-icon icon="arrow-up-right" height="24" width="24" class="text-gray-600 stroke-1 ml-2" />
            </div>
        </div>
        <div class="">
            <span class="py-2 text-xs text-gray-700 tracking-wide">
                {{ $service->serviceType->name }}
            </span>
            <p class="text-sm font-bold text-gray-900 line-clamp-2">
                {{ $service->title }}
            </p>
        </div>
    </div>
    <div class="hidden md:block mt-2">
        <p class="text-sm text-gray-700">
            {{ $service->description }}
        </p>

    </div>
@endif
