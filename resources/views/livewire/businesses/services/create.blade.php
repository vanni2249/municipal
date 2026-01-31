<div>
    <x-card>
        <x-card-header>
            <h1 class="font-bold text-lg text-gray-900 line-clamp-2">{{ $service->title }}</h1>
            <span class="text-gray-700 text-sm">{{ $service->title }}</span>
        </x-card-header>
    </x-card>

    {{ $service->slug }}

    @switch($service->slug)
        @case('app-business-remove-trash')
                app-business-remove-trash
            @break
        @case('app-business-remove-debris')
                app-business-remove-debris
            @break
        @case('app-business-construction-permit')
                app-business-construction-permit
            @break

        @case('app-business-use-permit')
                app-business-use-permit
            @break
        @case('app-business-temporary-patent')
                app-business-temporary-patent
            @break
        @case('app-business-renew-patent')
                app-business-renew-patent
            @break
        @case('app-business-report-tax')
                app-business-report-tax
            @break
        @default
            
    @endswitch
</div>
