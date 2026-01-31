<div>
    <x-card>
        <x-card-header>
            <h1 class="font-bold text-lg text-gray-900 line-clamp-2">{{ $service->title }}</h1>
            <span class="text-gray-700 text-sm">{{ $service->title }}</span>
        </x-card-header>
    </x-card>

    {{ $service->slug }}

    @switch($service->slug)
        @case('app-citizen-property-use')
            @livewire('citizens.applications.app-citizen-property-use.create')
            
            @break
        @case('app-citizen-property-rent')
            @livewire('citizens.applications.app-citizen-property-rent.create')
                
            @break
        @case('app-citizen-residencial-removal-debris')
                app-citizen-residencial-removal-debris
            @break

        @case('app-citizen-report-property-damage')
                app-citizen-report-property-damage
            @break
        @case('app-citizen-register-special-person')
                app-citizen-register-special-person
            @break
        @case('app-citizen-residencial-construction-permit')
                app-citizen-residencial-construction-permit
            @break
        @default
            
    @endswitch
</div>
