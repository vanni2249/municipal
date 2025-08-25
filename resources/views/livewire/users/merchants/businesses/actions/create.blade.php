<div>
    <div class="p-4">
        <x-card>
            <header class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold">{{ $service->es_name }}</h2>
            </header>
            <div>
                @switch($service->slug)
                    @case('request-garbage-collection-business')
                        request-garbage-collection-business
                        @break
                    @case('request-debris-collection-business')
                        request-debris-collection-business
                        @break
                    @default
                        
                @endswitch
            </div>
        </x-card>
    </div>
</div>
