<div>
    <x-card class="h-full rounded-xl">
        <header class="flex justify-between items-center mb-4">
            <h1 class="text-lg font-bold">Interacciones</h1>
        </header>
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
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-4">Fecha</th>
                    <th class="p-4">Categoría</th>
                    <th class="p-4">Servicios</th>
                    <th class="p-4">Mensajes<br/>sin leer</th>
                    <th class="p-4">Total<br/>de mensajes</th>
                    <th class="p-4">Usuario</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 w-14">Acción</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($interactions as $interaction)
                <tr class="border-t border-gray-300">
                    <!-- Date -->
                    <td class="p-4">{{ $interaction->created_at->diffForHumans() }}</td>
                    <!-- Type -->
                    <td class="p-4">{{ $interaction->getTypeNameAttribute() }}</td>
                    <!-- Service -->
                    <td class="p-4">{{ $interaction->service->es_name }}</td>
                    <!-- Messages not read -->
                    <td class="p-4">
                        @if ($interaction->countNotReadMessagesAdmin() == 0)
                            <span class="text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                0
                            </span>
                        @else
                            <span class="bg-red-300 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                {{ $interaction->countNotReadMessagesAdmin() }}
                            </span> 
                            
                        @endif
                    </td>
                    <!-- Messages -->
                    <td class="p-4">
                        <span class="bg-blue-300 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                            {{ $interaction->messages->count() }}
                        </span>
                    </td>
                    <!-- User -->
                    <td class="p-4">
                        <span>
                            {{ $interaction->user->name }}
                        </span>
                        <br>
                        <span class="text-xs text-gray-500">{{ $interaction->user->register->type->es_name }}</span>
                    </td>
                    <!-- Status -->
                    <td class="p-4">
                        <x-badge
                            color="{{ $interaction->getStatusColorAttribute() }}">{{ $interaction->getStatusNameAttribute() }}</x-badge>
                    </td>
                    <!-- Action -->
                    <td class="p-4 flex justify-end">
                        <x-icon-link href="{{ route('admin.interactions.show', ['interaction' => $interaction]) }}"
                            icon="eye" />
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">
                        No se encontraron interacciones.
                    </td>
                </tr>
                @endforelse

            </x-slot>
        </x-table>
    </x-card>
</div>
