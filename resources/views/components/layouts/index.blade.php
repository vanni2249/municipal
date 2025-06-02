@props(['type' => null])


@switch($type)
    @case('it-office')
        <x-layouts.it-office>
            {{ $slot }}
        </x-layouts.it-office>
    @break
    @case('finance-department')
        <x-layouts.finance-department>
            {{ $slot }}
        </x-layouts.finance-department>
    @break
    @case('citizen-help-office')    
    <x-layouts.citizen-help-office>
        {{ $slot }}
    </x-layouts.citizen-help-office>>
    @break
    @case('mayors-office')    
        <x-layouts.mayors-office>
            {{ $slot }}
        </x-layouts.mayors-office>
    @break
    @case('public-works-department')    
        <x-layouts.public-works-department>
            {{ $slot }}
        </x-layouts.public-works-department>
    @break
    @case('recreation-sports-department')    
        <x-layouts.recreation-sports-department>
            {{ $slot }}
        </x-layouts.recreation-sports-department>
    @break
    @default
        
@endswitch