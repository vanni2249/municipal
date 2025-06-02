<div>
    <x-card>
        
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2">Fecha <br />Comienzo</th>
                    <th class="p-2">Fecha <br />Finalización</th>
                    <th class="p-2">Tipo <br />Periodo</th>
                    <th class="p-2">Contribucion<br />Declarada</th>
                    <th class="p-2">Cantidad<br/>Pago</th>
                    <th class="p-2">Numero<br />Invoice</th>
                    <th class="p-2">Estado</th>
                    <th class="p-2">Fecha <br />Pago</th>
                    <th class="p-2 flex justify-end">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                <tr class="border-t border-gray-300 hover:bg-gray-100">
                    <td class="p-2">01-01-2025</td>
                    <td class="p-2">12-31-2025</td>
                    <td class="p-2">Renovacion</td>
                    <td class="p-2">$46,765.98</td>
                    <td class="p-2">$465.98</td>
                    <td class="p-2">in-45678765</td>
                    <td class="p-2">
                        <x-badge color="green" label="Pagado" />
                    </td>
                    <td class="p-2">01-01-2025</td>
                    <td class="p-2 flex justify-end">
                         <x-icon-link
                            href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.periods.show', 
                                ['merchant' => request()->segment(3), 
                                    'business'=> request()->segment(5), 
                                    'patent' => request()->segment(7), 
                                    'period' => 1
                                ]) }}"
                            icon="eye" label="Ver" size="xs" />
                    </td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>
</div>