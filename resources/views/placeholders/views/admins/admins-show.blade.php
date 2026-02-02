<div class="animate-pulse grid grid-cols-12 gap-4">
    <x-card class="col-span-full">
        @include('placeholders.components.header-tertiary')
    </x-card>
    <div class="col-span-full lg:col-span-5 space-y-4">
        <x-card class="">
            @include('placeholders.components.card-header')
            <div class="h-24 bg-gray-300 rounded w-full"></div>
        </x-card>
        <x-card class="">
            @include('placeholders.components.card-header')
            @include('placeholders.components.card-elements-horizontal')
        </x-card>
        <x-card class="">
            @include('placeholders.components.card-header')
            @include('placeholders.components.card-elements-horizontal')
        </x-card>
    </div>
    <div class="col-span-full lg:col-span-7 space-y-4">
        <x-card class="">
            @include('placeholders.components.card-header')
            @include('placeholders.components.card-elements-horizontal')
        </x-card>
        <x-card class="">
            @include('placeholders.components.card-header')
            @include('placeholders.components.card-elements-horizontal')
        </x-card>

    </div>
</div>
