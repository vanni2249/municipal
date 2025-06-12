<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Mensajes" />
        </header>
        <x-card class="col-span-full">
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
                        <th class="p-2 pr-20">Fecha</th>
                        <th class="p-2 w-1/5">Remitente</th>
                        <th class="p-2 w-1/5">Categoria</th>
                        <th class="p-2 w-2/5">Mensaje</th>
                        <th class="p-2 w-auto"></th>
                        <th class="p-2 pr-16">Estado</th>
                        <th class="p-2 w-14">Accion</th>
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @for ($i = 0; $i < 24; $i++)
                    <tr class="border-t border-gray-200">
                        <td class="p-2">hace 2 dias</td>
                        <td class="p-2">
                            <span>Juan Rodriguez</span>
                            <br>
                            <small class="text-gray-400">Comerciante</small>
                        </td>
                        <td class="p-2">
                            <span>Departamento de finanzas</span>
                            <br>
                            <small class="text-gray-400">Radicacion de patente temporera</small>
                            
                        </td>
                        <td class="p-2">
                            <span class="whitespace-normal line-clamp-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit temporibus, ipsam molestiae minus nulla, earum ipsa similique dolorum eum facilis fugiat provident magnam libero iusto vitae dignissimos, voluptatibus tempore dolore!
                            </span>
                            {{-- <small class="text-gray-400">Respuesta</small> --}}
                        </td>
                        <td class="p-2">
                            @php
                                $number = rand(2,12);

                                if ($number > 9) {
                                    $number = "+9";
                                }
                            @endphp
                            <div class="bg-red-300 rounded-full text-center h-5 w-5">
                                <span class="">
                                    {{ $number }}
                                </span>
                            </div>
                        </td>
                        <td class="p-2">
                            <x-badge color="green">Activo</x-badge>
                        </td>
                        <td class="p-2 flex">
                            <x-icon-link href="#" icon="eye" />
                        </td>
                    </tr>
                    @endfor
                </x-slot>
            </x-table>
        </x-card>
    </div>
</x-layouts.agencies>
