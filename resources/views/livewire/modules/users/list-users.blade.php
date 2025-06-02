<div>
    <x-card>
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
                    <th class="p-2">Name</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Telefonos</th>
                    <th class="p-2">Address</th>
                    <th class="p-2">Tipo</th>
                    <th class="p-2 w-24">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @for ($i = 0; $i < 35; $i++) <tr class="border-t border-gray-200 hover:bg-gray-100">
                    <td class="p-2">Geovanni Colon Barrios</td>
                    <td class="p-2">vanni2249@gmail.com</td>
                    <td class="p-2">+210-6656749</td>
                    <td class="p-2">
                        <ul>
                            <li>Villas del Prado</li>
                            <li>Calle del Sol 125</li>
                            <li>Juana Diaz PR 00795</li>
                        </ul>
                    </td>
                    <td class="p-2">
                        <x-badge color="green" label="Ciudadano" />
                    </td>
                    <td class="p-2">
                        <div class="flex justify-center space-x-1.5">
                            <x-icon-button icon="edit" />
                            <x-icon-link href="{{ route('agencies.'.request()->segment(2).'.users.show' , ['user' => 1]) }}" icon="eye" />
                        </div>
                    </td>
                    </tr>
                    @endfor

            </x-slot>
        </x-table>
    </x-card>
</div>