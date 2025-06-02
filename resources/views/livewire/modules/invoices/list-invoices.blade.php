<div>
    <x-card>
        
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2">Referencia</th>
                    <th class="p-2">Cantida <br/> pagada</th>
                    <th class="p-2">Fecha <br />de Pago</th>
                    <th class="p-2">Contribucion<br />Declarada</th>
                    <th class="p-2">Tipo <br/>de transferencia</th>
                    <th class="p-2">Pago <br/>hecho por</th>
                    <th class="p-2">Balance</th>
                    <th class="p-2 flex justify-end">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                <tr class="border-t border-gray-300 hover:bg-gray-100">
                    <td class="p-2">bg2g82nn</td>
                    <td class="p-2">$125.00</td>
                    <td class="p-2">01-01-2025</td>
                    <td class="p-2">$2,500.00</td>
                    <td class="p-2">En linea</td>
                    <td class="p-2">0.00</td>
                    <td class="p-2">01-01-2025</td>
                    <td class="p-2 flex justify-end">
                         {{-- <x-icon-link
                            href="{{ route(''.request()->segment(1).'.merchants.businesses.patents.periods.show', 
                                ['merchant' => request()->segment(3), 
                                    'business'=> request()->segment(5), 
                                    'patent' => request()->segment(7), 
                                    'period' => 1
                                ]) }}"
                            icon="eye" label="Ver" size="xs" /> --}}
                    </td>
                </tr>
            </x-slot>
        </x-table>
    </x-card>
</div>
