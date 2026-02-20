<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-center">
            <div>
                <x-h2 value="Servicios" />
                <p class="text-sm text-gray-700 mt-1">
                    Maneja los servicios disponibles para los negocios, incluyendo su costo, requisitos y aplicaciones.
                </p>
            </div>
        </header>
    </x-card>
    <x-card class="h-full rounded-xl">
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
                    <x-button variant="light" label="Filtro" />
                </div>
            </div>
        </div>
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 w-auto">Number</th>
                    <th class="p-2 w-auto">Titulo</th>
                    <th class="p-2 w-auto">Tipo</br>Cuenta</th>
                    <th class="p-2 w-auto">Tipo<br>Servicio</th>
                    <th class="p-2 w-auto">Costo</th>
                    <th class="p-2 w-auto">Aplicados</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($services as $service)
                    <tr class="border-t border-gray-300">
                        <!-- Number -->
                        <td class="p-2">
                            {{ $service->number ?? '...' }}
                        </td>
                        <!-- Title -->
                        <td class="p-2">
                            {{ $service->title ?? '...' }}
                        </td>
                        <!-- Account Type -->
                        <td class="p-2">
                            {{ $service->accountType->name ?? '...' }}
                        </td>
                        <!-- Service Type -->
                        <td class="p-2 capitalize">
                            <span>
                                {{ $service->serviceType->name ?? '...' }}
                            </span>
                        </td>
                        <!-- Amount -->
                        <td class="p-2">
                            <span>
                                {{ $service->amount ?? '...' }}
                            </span>
                        </td>
                        <!-- Applied -->
                        <td class="p-2">
                            {{ $service->applications->count() ?? '0' }}
                        </td>
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" href="{{ route('admin.services.show', ['department' => request()->department(), 'service' => $service->ulid]) }}"
                                icon="arrow-up-right" wire:navigate/>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay administradores disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>
</div>
