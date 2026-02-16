<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Registros</h1>
        </header>
    </x-card>
    <x-card class="h-full rounded-xl">
        <div class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
            <div class="">
                <x-input placeholder="Buscar" class="w-full" />
            </div>
            <div class="flex space-x-2">
                <div class="bg-gray-200 rounded-md p-1">
                    <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mostrar</span>
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
                    <th class="p-2 w-auto">Fecha</th>
                    <th class="p-2 w-auto">Tipo</br>Registro</th>
                    <th class="p-2 w-auto">Usuario</th>
                    <th class="p-2 w-auto">Cuenta</th>
                    {{-- <th class="p-2 w-auto">Status</th> --}}
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($logs as $log)
                    <tr class="border-t border-gray-300">
                        <!-- Number -->
                        <td class="p-2">
                            <x-date-format date="{{ $log->created_at }}" format="D d/M/Y H:i:s" />
                        </td>
                        <!-- Method -->
                        <td class="p-2 capitalize">
                            {{ $log->logType->name ?? '...' }}
                        </td>
                        <!-- Transactionable -->
                        <td class="p-2">
                            {{ $log->user_id ? $log->user->name . ' ' . $log->user->lastname : '...' }}
                        </td>
                        <!-- Amount -->
                        <td class="p-2">
                            {{ $log->account_id ? $log->account->number : '...' }}

                        </td>
                        <!-- Actions -->
                        <td class="p-2 flex space-x-2 justify-end">
                                <x-icon-link variant="light"
                                    href="{{ route('admin.logs.show', ['log' => $log->ulid]) }}"
                                    icon="eye" wire:navigate />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay registros disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>
</div>
