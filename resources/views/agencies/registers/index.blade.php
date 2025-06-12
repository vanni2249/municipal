<x-layouts.agencies>
    @php
        $registers = [
            ['title' => 'Empleados', 'route' => request()->segment(1) . '.registers.employees.index', 'count' => 10],
            ['title' => 'Ciudadanos', 'route' => request()->segment(1) . '.registers.citizens.index', 'count' => 10],
            ['title' => 'Comerciantes', 'route' => request()->segment(1) . '.registers.merchants.index', 'count' => 5],
            ['title' => 'Contables', 'route' => request()->segment(1) . '.registers.accountants.index', 'count' => 3],
            ['title' => 'Contratistas', 'route' => request()->segment(1) . '.registers.contractors.index', 'count' => 2],
            ['title' => 'Supplidores', 'route' => request()->segment(1) . '.registers.suppliers.index','count' => 1],
            ['title' => 'Personas mayor', 'route' => request()->segment(1) . '.registers.seniors.index', 'count' => 1],
            ['title' => 'Personas discapacidad', 'route' => request()->segment(1) . '.registers.disabled-people.index', 'count' => 1],
        ];
    @endphp
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Registros" />
            <div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <x-button size="sm" class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 6h16" />
                                <path d="M7 12h13" />
                                <path d="M10 18h10" />
                            </svg>
                        </x-button>
                    </x-slot>
                    <x-slot name="content">
                        @foreach ($registers as $register)
                            <x-dropdown-link href="{{ isset($register['route']) ? route($register['route']) : '#' }}">
                                {{ $register['title'] }}
                            </x-dropdown-link>
                        @endforeach
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
        <!-- Table -->
        <div class="col-span-full lg:col-span-9">
            <x-card class="h-full">
                <header class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
                    <div class="">
                        <x-input placeholder="Buscar" class="w-full" />
                    </div>
                    <div class="flex space-x-2">
                        <div class="bg-gray-200 rounded-md p-1">
                            <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mostra</span>
                            <select class="mx-2 rounded-md text-sm">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                            </select>
                        </div>
                        <div>
                            <x-button variant="light">Filtro</x-button>
                        </div>
                    </div>
                </header>
                <x-table>
                    <x-slot name="head">
                        <tr>
                            <th class="p-2">Fecha</th>
                            <th class="p-2">Categoria</th>
                            <th class="p-2">Nombre</th>
                            <th class="p-2">Conexion</th>
                            <th class="p-2">Estado</th>
                            <th class="p-2 w-14">Accion</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @foreach (App\Data\Register::items() as $item)
                            <tr class="border-t border-gray-200">
                                <td class="px-2 py-1 w-1/5">hace {{ $item['date'] }} dias</td>
                                <td class="px-2 py-1 w-1/5">{{ $item['category'] }}</td>
                                <td class="px-2 py-1 w-1/5">{{ $item['name'] }}</td>
                                <td class="px-2 py-1 w-1/5">
                                    <x-badge color="{{ $item['connection_color'] }}" class="capitalize">
                                        {{ $item['connection'] }}
                                    </x-badge>
                                </td>
                                <td class="px-2 py-1 w-1/5">
                                    <x-badge color="{{ $item['status_color'] }}">{{ $item['status'] }}</x-badge>
                                </td>
                                <td class="px-2 py-1 flex">
                                    <x-icon-link href="#" icon="eye" />
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </x-card>
        </div>
        <!-- Sidebar -->
        <div class="col-span-full lg:col-span-3">
            <x-card>
                <div class="grid grid-cols-2 gap-2">
                    @php
                        $items = [['title' => 'Totales', 'value' => '1,234', 'span' => 'full']];
                    @endphp
                    @foreach ($items as $item)
                        <div class="bg-gray-100 col-span-{{ $item['span'] }} rounded p-2">
                            <small class="text-gray-600 text-xs">{{ $item['title'] }}</small>
                            <div class="flex items-baseline space-x-1">
                                <h2 class="text-xl font-bold text-gray-900">
                                    {{ $item['value'] }}
                                </h2>
                            </div>
                        </div>
                    @endforeach
                    <div class="bg-gray-100 col-span-2 rounded-md">
                        <header class=" p-2">
                            <h3 class="font-bold text-gray-800">Registros mas sometidos</h3>
                        </header>

                        <ul class="text-xs text-gray-600">
                            @foreach ($registers as $register)
                                <li class="flex justify-between items-center border-t border-gray-200 p-2">
                                    <span>
                                        @if (isset($register['route']))
                                            <a href="{{ route($register['route']) }}"
                                                class="flex text-blue-600 hover:underline">
                                                {{ $register['title'] }}
                                            </a>
                                        @else
                                            <span class="text-gray-800">
                                                {{ $register['title'] }}
                                            </span>
                                        @endif
                                    </span>
                                    <span class="text-xs text-gray-500">{{ $register['count'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </x-card>
        </div>

    </div>
</x-layouts.agencies>
