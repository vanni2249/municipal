<div>

    <x-card class="col-span-full">
        <header class="md:flex md:justify-between space-y-2 items-center mb-4">
            <div>
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
                    <th class="p-2">Nombre</th>
                    <th class="p-2">Telefono</th>
                    <th class="p-2">Correo electronico</th>
                    <th class="p-2">Negocios</th>
                    <th class="p-2">Direccion</th>
                    <th class="p-2">Fecha de creacion</th>
                    <th class="p-2">Estado</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @for ($i = 0; $i < 20; $i++) <tr class="bg-white border-t border-gray-200 hover:bg-gray-50">
                    <td class="p-2">Geovanni Colon Barrios</td>
                    <td class="p-2">210-665-6749</td>
                    <td class="p-2">vanni2249@gmail.com</td>
                    <td class="p-2">1</td>
                    <td class="p-2">
                        <ul>

                            <li>Urb. Villas del Prado</li>
                            <li>Calle 2 124</li>
                            <li>Juana Diaz PR 00795</li>
                        </ul>
                    </td>
                    <td class="p-2">2023-10-01</td>
                    <td class="p-2">
                        <x-badge color="green" label="Activo" />
                    </td>
                    <td class="p-2 w-14">
                        <div class="flex justify-end space-x-1.5">
                            @if (request()->segment(1) == 'accountants')
                            <x-icon-link
                                href="{{ route('accountants.merchants.show', ['merchant' => 1]) }}"
                                icon="eye" />

                            @else
                            <x-icon-link
                                href="{{ route(''.request()->segment(1).'.merchants.show', ['merchant' => 1]) }}"
                                icon="eye" />

                            @endif
                        </div>

                    </td>
                    </tr>
                    @endfor
            </x-slot>
        </x-table>
    </x-card>
</div>