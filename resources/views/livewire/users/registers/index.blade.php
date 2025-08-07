<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-800">
                            Registros
                        </h2>
                        <div class="flex items-center space-x-2">
                            {{-- <x-icon-link href="{{ route('users.registers.create') }}" icon="plus" /> --}}
                            <x-icon-button @click="$dispatch('open-modal', 'create-register-modal')" icon="plus" />
                        </div>
                    </header>
                    <x-table>
                        <x-slot name="head">
                            <tr>
                                <th class="p-4">Nombre</th>
                                <th class="p-4">Phone</th>
                                <th class="p-4">Dirreccion</th>
                                <th class="p-4">Fecha <br> Nacimiento</th>
                                <th class="p-4 text-right w-14">Acciones</th>
                            </tr>
                        </x-slot>
                        <x-slot name="body">
                            @forelse ($registers as $register)
                                <tr class="border-b border-gray-300 hover:bg-gray-50">
                                    <td class="p-4">
                                        {{ $register->name }}
                                        <br>
                                        <small class="text-gray-600">
                                            {{ $register->is_veteran ? 'Veterano' : '' }}
                                            {{ $register->is_age_advanced ? 'Edad avanzada' : '' }}
                                            {{ $register->is_disability ? 'Discapacidad' : '' }}
                                            {{-- &bull; --}}
                                            {{-- Encamado --}}
                                        </small>
                                    </td>
                                    <td class="p-4">
                                        {{ $register->phone ?? '...' }}
                                    </td>
                                    <td class="p-4">
                                        @if ($register->address)
                                            <address class="text-sm">
                                                {{ $register->address ?? '...' }}
                                                <br>
                                                {{ $register->city ?? '...' }},
                                                {{ $register->postal_code ?? '...' }}<br>
                                            </address>
                                        @else
                                            ...
                                        @endif

                                    </td>
                                    <td class="p-4">
                                        {{ $register->date_of_birth ?? '...' }}
                                    </td>
                                    <td class="p-4 flex justify-end">
                                        <x-icon-link href="{{ route('users.registers.show', $register) }}" icon="eye"/>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center p-4 text-gray-500">
                                        No hay registros disponibles.
                                    </td>
                                </tr>
                            @endforelse
                        </x-slot>
                    </x-table>
                </x-card>
            </div>
        </div>
    </div>
    <x-modal name="create-register-modal" title="Crear registro de ciudadano" size="lg">
        @include('users.registers.form')
    </x-modal>
</div>
