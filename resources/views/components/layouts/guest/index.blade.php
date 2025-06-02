<x-layouts.navbar>
    <x-slot name="header">
        <a href="/" @class(['text-xl font-semibold text-gray-900'])>
            MyApp's
        </a>
        @php
            $items = [
                [
                    'label' => 'Ciudadano',
                    'route' => 'users.login',
                ],
                [
                    'label' => 'Comerciante',
                    'route' => 'merchants.login',
                ],
                [
                    'label' => 'Contador',
                    'route' => 'accountants.login',
                ],
                [
                    'label' => 'Contratista',
                    'route' => 'contractors.login',
                ],
                [
                    'label' => 'Supplidor',
                    'route' => 'suppliers.login',
                ],
                [
                    'label' => 'Empleados',
                    'route' => 'employees.login',
                ]
            ];
        @endphp
        <nav class="hidden lg:flex space-x-4 text-sm font-semibold">
            @foreach ($items as $item)
            <a href="{{ route($item['route']) }}" class="text-gray-700 hover:text-gray-900">{{ $item['label'] }}</a>
            @endforeach
        </nav>
        <nav class="flex lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6l16 0" />
                <path d="M4 12l16 0" />
                <path d="M4 18l16 0" />
            </svg>
        </nav>
    </x-slot>
        <nav class="bg-black text-gray-100">
            <div class="max-w-7xl px-4 mx-auto flex items-center justify-start lg:justify-center w-full">
                <div class="flex space-x-4 font-bold uppercase text-xs overflow-auto">
                    <a href="{{ route('services.users') }}"
                        class="text-gray-100 hover:text-gray-300 whitespace-nowrap py-2">Servicios
                    </a>
                    <a href="{{ route('announcements.index') }}"
                        class="text-gray-100 hover:text-gray-300 whitespace-nowrap py-2">Avisos publicos</a>
                    <a href="{{ route('news.index') }}"
                        class="text-gray-100 hover:text-gray-300 whitespace-nowrap py-2">Noticias</a>
                    <a href="{{ route('events.index') }}"
                        class="text-gray-100 hover:text-gray-300 whitespace-nowrap py-2">Eventos</a>
                    <a href="{{ route('agencies.index') }}"
                        class="text-gray-100 hover:text-gray-300 whitespace-nowrap py-2">Agencias
                        Municipales</a>
                    <a href="{{ route('releases.index') }}"
                        class="text-gray-100 hover:text-gray-300 whitespace-nowrap py-2">Comunicados de
                        prensa</a>
                    <a href="{{ route('facilities.index') }}"
                        class="text-gray-100 hover:text-gray-300 whitespace-nowrap py-2">Facilidades</a>
                </div>
            </div>
        </nav>
    {{ $slot }}
    <x-slot name="footer">
        <div class="max-w-7xl mx-auto">

            <ul class="px-4 py-2 text-sm text-gray-700 flex flex-col md:flex-row md:justify-between  space-y-1">
                <li class="font-bold">
                    &copy; {{ date('Y') }} MyApp. All rights reserved.
                </li>
                <li class="text-gray-600 text-xs">
                    Hecho con ❤️ en Puerto Rico
                </li>
            </ul>
        </div>
    </x-slot>
</x-layouts.navbar>