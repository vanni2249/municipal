<div>
    <x-card>
        <header class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg text-gray-800">Comercios</h3>
            @switch(request()->segment(3))
                @case('merchants')
                    {{-- <x-icon-link
                        href="{{ route(request()->segment(1) . '.registers.merchants.edit', ['merchant' => 1]) }}"></x-icon-link> --}}
                @break
            @endswitch
        </header>
        @if ($head)
            <div class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
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
            </div>
        @endif

        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 w-auto">Nombre</th>
                    <th class="p-2 w-auto">Direccion</th>
                    <th class="p-2 w-auto">Telefono</th>
                    <th class="p-2 w-auto">Estado</th>
                    <th class="p-2 w-auto">Fecha<br />creacion</th>
                    <th class="p-2 w-auto">Ultima<br />conexion</th>
                    <th class="p-2 w-auto text-right">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @for ($i = 0; $i < $show; $i++)
                    <tr class="border-t border-gray-200">
                        <td class="px-2 py-1">
                            <small>
                                xrl1e4
                            </small>
                            <br>
                            <span>
                                Farmacia Walgreens LLC 
                            </span>
                        </td>
                        <td class="px-2 py-1">
                            123 Main St, San Antonio, TX 78205
                        </td>
                        <td class="px-2 py-1">210-665-6749</td>
                        <td class="px-2 py-1"><x-badge color="green" class="capitalize">Activo</x-badge></td>
                        <td class="px-2 py-1">12/08/2026</td>
                        <td class="px-2 py-1">hace {{ rand(5, 30) }} dias</td>
                        <td class="px-2 py-1 flex justify-end">
                            @if (request()->segment(3) == 'a')
                            @endif
                            @switch(request()->segment(3))
                                @case('merchants')
                                    <x-icon-link
                                        href="{{ route(request()->segment(1) . '.registers.merchants.businesses.show', ['merchant' => 1, 'business' => 1]) }}"
                                        icon="eye" />
                                @break

                                @case('accountants')
                                    <x-icon-link
                                        href="{{ route(request()->segment(1) . '.registers.accountants.merchants.businesses.show', ['accountant' => 1, 'merchant' => 1, 'business' => 1]) }}"
                                        icon="eye" />
                                @break

                                @default
                            @endswitch
                        </td>
                    </tr>
                @endfor
            </x-slot>
        </x-table>
    </x-card>

</div>
