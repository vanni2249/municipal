<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Contratista" />
        </header>
        <!-- Table -->
        <div class="col-span-full lg:col-span-full">
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
                            <th class="p-2 w-auto">Nombre</th>
                            <th class="p-2 w-auto">Email</th>
                            <th class="p-2 w-auto">Telefono</th>
                            <th class="p-2 w-auto">Estado</th>
                            <th class="p-2 w-auto">Fecha<br/>creacion</th>
                            <th class="p-2 w-auto">Ultima<br/>conexion</th>
                            <th class="p-2 w-auto text-right">Accion</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @for ($i = 0; $i < 24; $i++)
                            
                        <tr class="border-t border-gray-200">
                            <td class="px-2 py-1">
                                <span>
                                    Geovanni Colon Barrios
                                </span>
                                <br>
                                <b>
                                    xrl1e4
                                </b>
                            </td>
                            <td class="px-2 py-1">vanni2249@gmail.com</td>
                            <td class="px-2 py-1">210-665-6749</td>
                            <td class="px-2 py-1"><x-badge color="green" class="capitalize">Activo</x-badge></td>
                            <td class="px-2 py-1">12/08/2026</td>
                            <td class="px-2 py-1">hace {{ rand(5, 30) }} dias</td>
                            <td class="px-2 py-1 flex justify-end">
                                <x-icon-link href="{{ route(request()->segment(1) . '.registers.contractors.show', ['contractor' => 1]) }}" icon="eye" />
                            </td>
                        </tr>
                        @endfor
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
</x-layouts.agencies>