<div class="space-y-4">
    <div class="flex space-x-2">
        <div class="flex flex-shrink-0 flex-col justify-center">
            <div class="p-3.5 bg-white hover:bg-gray-100 rounded-xl">
              <div class="h-4 bg-gray-300 rounded w-4"></div>
            </div>
        </div>
        <x-card class="grow">
            @include('placeholders.components.breadcrumbs')
        </x-card>
    </div>
    <x-card>
        @include('placeholders.components.header-secondary')
    </x-card>
    <x-card>
        @include('placeholders.components.card-elements-horizontal')
    </x-card>
</div>
