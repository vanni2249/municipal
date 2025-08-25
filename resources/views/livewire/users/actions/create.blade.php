<div>
    <div class="p-4">
        <x-card>
            <header class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold">{{ $service->es_name }}</h2>
            </header>
            <div>
                @switch($service->slug)
                    @case('request-debris-collection-home')
                        {{-- request-debris-collection-home --}}
                        {{-- @livewire('applications.application-debris-collection-home.create') --}}
                    @break

                    @case('file-construction-permit')
                        {{-- file-construction-permit --}}
                    @break

                    @case('file-usage-permit')
                        {{-- file-usage-permit --}}
                    @break

                    @default
                @endswitch
            </div>
        </x-card>
    </div>
</div>
