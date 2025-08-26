<div>
    <div class="p-4">
        <x-card>
            <header class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">{{ $service->es_name }}</h2>
            </header>

            @switch($service->slug)
                @case('debris-collection-home')
                    {{-- debris-collection-home --}}
                    @livewire('users.applications.debris-collection-home.create')
                    @break
                @case(2)
                    
                    @break
                @default
                    
            @endswitch
        </x-card>
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
