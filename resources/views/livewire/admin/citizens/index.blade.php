<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Ciudadanos
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-link href="{{ route('admin.citizens.create') }}" icon="plus" />
                </div>
            </div>
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
                    <th class="p-4 w-auto">Nombre</th>
                    <th class="p-4 w-auto">Email<br />Teléfono</th>
                    <th class="p-4 w-auto">Lugar</th>
                    <th class="p-4 w-auto">Dirección</th>
                    <th class="p-4 w-auto">Creado<br/> por</th>
                    <th class="p-4 w-auto">Fecha<br />creación</th>
                    <th class="p-4 w-auto text-right">Acción</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($citizens as $citizen)
                    <tr class="border-t border-gray-200">
                        <td class="p-4">
                            <span>
                                {{ $citizen->code }}
                            </span>
                            <br>
                            <span>
                                {{ $citizen->name }} {{ $citizen->lastname }}
                            </span>
                        </td>
                        <td class="p-4">
                            <span>
                                {{ $citizen->email }}
                            </span>
                            <br>
                            <span>{{ $citizen->phone }}</span>
                        </td>
                        <td class="p-4">
                            {{ $citizen->place ? $citizen->place->name : '...' }}
                        </td>
                        <td class="p-4">
                            <span>{{ $citizen->address }}</span>
                            <br>
                            <span>
                                {{ $citizen->city }} {{ $citizen->postal_code }}
                            </span>
                            
                        </td>
                        <td class="p-4">
                            <x-badge color="" label="{{ $citizen->created_by??'...' }}" />
                            
                        </td>
                        <td class="p-4">{{ $citizen->created_at->format('d/m/Y') }}</td>
                        <td class="p-4 flex justify-end">
                            <x-icon-link href="{{ route('admin.citizens.show', ['citizen' => $citizen->id]) }}"
                                icon="eye" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay ciudadanos disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>

</div>
