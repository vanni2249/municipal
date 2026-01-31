<div class="animate-pulse grid grid-cols-12 gap-4">
    <div class="col-span-full">
        <x-card>
            @include('placeholders.components.header-tertiary')
        </x-card>
    </div>
    <div class="col-span-full">
        <x-card>
            @include('placeholders.components.card-header')
            @include('placeholders.components.card-elements-vertical')
        </x-card>
    </div>
    <div class="col-span-full lg:col-span-7">
        <x-card>
            @include('placeholders.components.card-header')
            @include('placeholders.components.card-elements-horizontal')
        </x-card>
    </div>
    <div class="col-span-full lg:col-span-5">
        <x-card>
            @include('placeholders.components.card-header')
            @include('placeholders.components.card-elements-horizontal')
        </x-card>
    </div>

</div>