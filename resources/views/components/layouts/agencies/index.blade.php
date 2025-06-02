<x-layouts.sidebar>

    <x-slot name="header">
        <ul class="flex space-x-6 md:space-x-8 lg:space-x-10">
            <li class="inline-block">
                <a href="" class="text-gray-800 hover:text-gray-600">
                    <img src="{{ asset('icons/bell.svg') }}" alt="bell">
                </a>
            </li>
            <li class="inline-block">
                <a href="" class="text-gray-800 hover:text-gray-600">
                    <img src="{{ asset('icons/user-circle.svg') }}" alt="user">
                </a>
            </li>
        </ul>
    </x-slot>
    <x-slot name="sidebarTitle">
        MyApps
    </x-slot>
    <x-slot name="sidebarSubtitle">
        @switch(request()->segment(1))
        @case('public-works')
            Obras-publicas
        @break
        @case('citizens-help')
            Oficina de Ayuda al ciudadano
        @break
        @case('recreation-sports')
            Departemento de Recreacion y Deportes
        @break
        @case('emergency-management')
            Departament de Manejo de Emergencia
        @break
        @case('city-police')
            Policia Municipal
        @break
        @case('city-administrator')
            Administrador de la ciudad
        @break
        @case('mayors-office')
            Oficina del Alcalde
        @break
        @case('city-legislature')
            Legislatura de la ciudad
        @break
        @case('human-resources')
        Recursos Humanos
        @break
        @case('it-office')
            Oficina de IT
        @break
        @case('press-office')
            Oficina de Prensa
        @break
        @case('finances')
            Finanzas
        @break
        @default
            xxxxx
        @endswitch
    </x-slot>
    <x-slot name="sidebarLinks">
        @php
            $items = [];
            switch (request()->segment(1)) {
                case 'finances':
                    $items = App\Data\Links\Sidebar\Finance::items();
                    break;
                case 'help-citizen':
                    $items = App\Data\Links\Sidebar\HelpCitizen::items();
                    break;
                case 'it-office':
                    $items = App\Data\Links\Sidebar\ItOffice::items();
                    break;
                case 'mayors-office':
                    $items = App\Data\Links\Sidebar\MayorOffice::items();
                    break;
                case 'public-works':
                    $items = App\Data\Links\Sidebar\PublicWork::items();
                    break;
                case 'recreation-sports':
                    $items = App\Data\Links\Sidebar\RecreationSport::items();
                    break;

                default:
                $items = [];
                break;
            }
        @endphp
        @foreach ($items as $item)
        <x-layouts.sidebar-link href="{{ route($item['route']) }}" @class(['bg-gray-800'=> request()->segment(3) ==
            $item['path']])>
            {{ $item['name'] }}
        </x-layouts.sidebar-link>
        @endforeach
    </x-slot>

    {{ $slot }}

    <x-slot name="footer">
        <div
            class="text-gray-700 text-xs flex flex-col md:flex-row md:items-center md:justify-between px-4 py-2 space-y-1">
            <ul class="space-y-1">
                <li class="font-bold">
                    &copy; {{ date('Y') }} MyApp. All rights reserved.
                </li>
            </ul>
            <ul>
                <li class="text-gray-600">
                    Hecho con ❤️ en Puerto Rico
                </li>
            </ul>
        </div>
    </x-slot>
</x-layouts.sidebar>