<div>
    <x-card class="h-full rounded-xl">
        <header class="flex justify-between items-center mb-4">
            <h1 class="text-lg font-bold">Registros</h1>
            <x-icon-button icon="plus" @click="$dispatch('open-modal', 'create-register-modal')" />
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
                    <th class="p-4">Nombre</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Phone</th>
                    <th class="p-4">Veterano</th>
                    <th class="p-4">Edad avanzada</th>
                    <th class="p-4">Encamado</th>
                    <th class="p-4">Discapacidad</th>
                    <th class="p-4 w-14">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @foreach ($registers as $register)
                <tr class="border-t border-gray-200">
                    <td class="px-4 py-1 w-1/5">
                        <span>
                            {{ $register->user ? $register->user->name : $register->name }}
                        </span>
                        <br>
                        <small>
                            {{ $register->user ? 'Usuario' : 'No Usuario' }}
                        </small>
                    </td>
                    <td class="px-4 py-1 w-1/5">{{ $register->user ? $register->user->email : $register->email ?? '...' }}</td>
                    <td class="px-4 py-1 w-1/5">{{ $register->user ? $register->user->phone : $register->phone ?? '...' }}</td>
                    <td class="px-4 py-1 w-1/5">
                        <x-badge color="{{ $register->is_veteran ? 'green' : 'red' }}">
                            {{ $register->is_veteran ? 'Si' : 'No' }}
                        </x-badge>
                    </td>
                    <td class="px-4 py-1 w-1/5">
                        <x-badge color="{{ $register->is_age_advanced ? 'green' : 'red' }}">
                            {{ $register->is_age_advanced ? 'Si' : 'No' }}
                        </x-badge>
                    </td>
                    <td class="px-4 py-1 w-1/5">
                        <x-badge color="{{ $register->is_bedridden ? 'green' : 'red' }}">
                            {{ $register->is_bedridden ? 'Si' : 'No' }}
                        </x-badge>
                    </td>
                    <td class="px-4 py-1 w-1/5">
                        <x-badge color="{{ $register->is_disabled ? 'green' : 'red' }}">
                            {{ $register->is_disabled ? 'Si' : 'No' }}
                        </x-badge>
                    </td>
                    <td class="px-4 py-1 flex justify-end">
                        <x-icon-link href="{{ route('admin.registers.show', ['register' => $register->id]) }}"
                            icon="eye" />
                    </td>
                </tr>
                @endforeach
            </x-slot>
        </x-table>
    </x-card>

    <!-- Modal create register -->
    <x-modal name="create-register-modal" title="Crear registro" size="lg">
        <form wire:submit.prevent="createRegister" class="space-y-2">
                @include('admin.registers.form')
        </form>
    </x-modal>
</div>