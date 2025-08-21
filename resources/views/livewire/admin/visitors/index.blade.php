<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Visitantes
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-link href="{{ route('admin.visitors.create') }}" icon="plus" />
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
                    <th class="p-4 w-auto">Email<br/>Teléfono</th>
                    <th class="p-4 w-auto">Dirección</th>
                    <th class="p-4 w-auto">Creado por</th>
                    <th class="p-4 w-auto">Fecha<br />creación</th>
                    <th class="p-4 w-auto text-right">Acción</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($visitors as $visitor)
                    <tr class="border-t border-gray-200">
                        <td class="p-4">
                            <span>
                                {{ $visitor->code }}
                            </span>
                            <br>
                            <span>
                                {{ $visitor->name }} {{ $visitor->lastname }}
                            </span>
                        </td>
                        <td class="p-4">
                            <span>
                                {{ $visitor->email??'...' }}
                            </span>
                            <br>
                            <span>
                                {{ $visitor->phone??'...' }}
                            </span>
                        </td>
                        <td class="p-4">
                            {{ $visitor->address }}
                            <br>
                            <span>
                                {{ $visitor->city }} {{ $visitor->postal_code }}
                            </span>
                        </td>
                        <td class="p-4">
                            <x-badge color="" label="{{ $visitor->created_by }}"></x-badge>
                        </td>
                        <td class="p-4">{{ $visitor->created_at->format('d/m/Y') }}</td>
                        <td class="p-4 flex justify-end">
                            <x-icon-link href="{{ route('admin.visitors.show', ['visitor' => $visitor->id]) }}"
                                icon="eye" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay visitantes disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>
</div>
