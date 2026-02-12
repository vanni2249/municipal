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
                    <th class="p-4">Number</th>
                    <th class="p-4">Cuenta</th>
                    <th class="p-4">Servicio</th>
                    <th class="p-4">Total<br />mensajes</th>
                    <th class="p-4">Fecha</th>
                    <th class="p-4">Estado</th>
                    <th class="p-4 w-14"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($interactions as $interaction)
                    <tr class="border-t border-gray-300">
                        <!-- Number -->
                        <td class="p-4">{{ $interaction->number }}</td>
                        <!-- Account -->
                        <td class="p-4">
                            @if ($interaction->account_id)
                                {{ $interaction->account->user_id
                                    ? $interaction->account->user->name . ' ' . $interaction->account->user->lastname
                                    : $interaction->account->name . ' ' . $interaction->account->lastname }}
                            @else
                                {{ $interaction->business->name }}
                            @endif
                        </td>
                        <!-- Type -->
                        <td class="p-4">{{ $interaction->interactionable->service->title }}</td>
                        <!-- Total Messages -->
                        <td class="p-4">
                            {{ $interaction->messages->count() }}
                        </td>
                        <!-- Date -->
                        <td class="p-4">

                            @if ($interaction->created_at->diffInMonths(now()) >= 1)
                                {{-- Más de un mes: mostramos formato de fecha --}}
                                <x-date-format :date="$interaction->created_at" format="d/m/Y" />
                            @else
                                {{-- Menos de un mes: mostramos formato humano --}}
                                <x-diff-humans :date="$interaction->created_at" />
                            @endif

                        </td>
                        <!-- Statuses -->
                        <td class="p-4">
                            <x-badge label="{{ $interaction->status->statusType->name }}"
                                color="{{ $interaction->status->statusType->variant }}" />
                        </td>
                        <!-- Action -->
                        <td class="p-4 flex justify-end">
                            <x-icon-link
                                href="{{ route('admin.interactions.show', ['interaction' => $interaction->ulid]) }}"
                                icon="arrow-narrow-right-dashed" variant="light" wire:navigate />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="p-4 text-center text-gray-500">
                            No se encontraron interacciones.
                        </td>
                    </tr>
                @endforelse

            </x-slot>
        </x-table>
    </x-card>
</div>
