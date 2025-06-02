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
        Departamento de Finazas
    </x-slot>
    <x-slot name="sidebarLinks">
        @foreach (App\Data\Links\Sidebar\FinanceDepartment::items() as $item)
        <x-layouts.sidebar-link href="{{ route($item['route']) }}" 
            @class(['bg-gray-800' => request()->segment(2) == $item['path']])>
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