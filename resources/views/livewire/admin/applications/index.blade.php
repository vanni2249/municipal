<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Aplicaciones</h1>
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
                    <th class="p-2 w-auto">Servicio</th>
                    <th class="p-2 w-auto">Ciudadano</th>
                    <th class="p-2 w-auto">Comercio</th>
                    <th class="p-2 w-auto">Status</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($applications as $application)
                    <tr class="border-t border-gray-300">
                        <!-- Name -->
                        <td class="p-2">
                            {{ $application->number ?? '...' }}
                        </td>
                        <!-- Type -->
                        <td class="p-2">
                            {{ $application->service->serviceType->name ?? '...' }}
                        </td>
                        <!-- Citizen -->
                        <td class="p-2 capitalize">
                            <span>
                                @if ($application->account_id)
                                    {{ $application->account->user->name . ' ' . $application->account->user->lastname ?? '...' }} 
                                    
                                @else
                                    ...
                                @endif
                            </span>
                        </td>
                        <!-- Business -->
                        <td class="p-2 capitalize">
                            <span>
                                @if ($application->business_id)
                                    {{ $application->business->name ?? '...' }} 
                                    
                                @else
                                    ...
                                @endif
                            </span>
                        </td>
                        <!-- Status -->
                        <td class="p-2">
                            <x-badge label="{{ $application->status->statusType->name ?? '...' }}" variant="{{ $application->status->statusType->variant ?? 'secondary' }}" />
                        </td>
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" href="{{ route('admin.applications.show', ['application' => $application->ulid]) }}"
                                icon="eye" wire:navigate/>
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
