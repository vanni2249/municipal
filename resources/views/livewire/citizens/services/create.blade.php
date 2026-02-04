<div class="space-y-4">
    <x-card>
        <x-card-header>
            <h1 class="font-bold text-lg text-gray-900 line-clamp-2">{{ $service->title }}</h1>
            <span class="text-gray-700 text-sm">{{ $service->title }}</span>
        </x-card-header>
    </x-card>

    {{-- {{ $service->slug }} --}}

    @switch($service->slug)
        @case('app-citizen-property-use')
            @livewire('citizens.applications.app-citizen-property-use.create', [
                'service' => $service,
                'account' => $account,
            ])
        @break

        @case('app-citizen-property-rent')
            @livewire('citizens.applications.app-citizen-property-rent.create', [
                'service' => $service,
                'account' => $account,
            ])
        @break

        @case('app-citizen-residencial-removal-debris')
            @livewire('citizens.applications.app-citizen-residencial-removal-debris.create', [
                'service' => $service,
                'account' => $account,
            ])
        @break

        @case('app-citizen-report-property-damage')
            @livewire('citizens.applications.app-citizen-report-property-damage.create', [
                'service' => $service,
                'account' => $account,
            ])
        @break

        @case('app-citizen-register-special-person')
            @livewire('citizens.applications.app-citizen-register-special-person.create', [
                'service' => $service,
                'account' => $account,
            ])
        @break

        @case('app-citizen-residencial-construction-permit')
            @livewire('citizens.applications.app-citizen-residencial-construction-permit.create', [
                'service' => $service,
                'account' => $account,
            ])
        @break

        @default
    @endswitch
</div>
