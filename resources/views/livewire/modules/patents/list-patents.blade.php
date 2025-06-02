<div>
    <x-card>
        @if (request()->segment(3) == 'patents')
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
        @endif
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2">Tipo<br />patente</th>
                    <th class="p-2">Numero<br />patente</th>
                    <th class="p-2">Fecha<br />expedicion </th>
                    <th class="p-2">Numero<br />contribuyente</th>
                    <th class="p-2">Ano<br />contributivo</th>
                    <th class="p-2">Codigo<br />negocio</th>
                    <th class="p-2">Regira<br />desde</th>
                    <th class="p-2">Regira<br />hasta</th>
                    <th class="p-2">Contribucion<br />declarada</th>
                    <th class="p-2">Cantidad<br />pagada</th>
                    <th class="p-2">Estado<br />pago</th>
                    <th class="p-2">Fecha<br />pago</th>
                    <th class="p-2 text-right">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @for ($i = 0; $i < 2; $i++) <tr class="bg-white border-t border-gray-200 hover:bg-gray-50">
                    <td class="p-2">Temporera</td>
                    <td class="p-2">t-0884782983</td>
                    <td class="p-2">12-12-2025</td>
                    <td class="p-2">478541255885</td>
                    <td class="p-2">2025</td>
                    <td class="p-2">Restaurante</td>
                    <td class="p-2">01-01-2025</td>
                    <td class="p-2">12-31-2025</td>
                    <td class="p-2">12,800</td>
                    <td class="p-2">57.00</td>
                    <td class="p-2">
                        <x-badge color="green" label="Pagado" />
                    </td>
                    <td class="p-2">12-12-2025</td>
                    <td class="flex p-2  justify-end">
                        <x-icon-link
                            href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.show', ['merchant' => request()->segment(3), 'business'=> request()->segment(5), 'patent' => 1]) }}"
                            icon="eye" label="Ver" size="xs" />

                    </td>
                    </tr>
                    @endfor

            </x-slot>
        </x-table>
    </x-card>
</div>