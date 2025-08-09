<div>
    <div class=" p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comerciantes
                        </h2>
                        <div>
                            <x-icon-button @click="$dispatch('open-modal', 'create-register-modal')"
                                icon="plus"></x-icon-button>
                        </div>
                    </header>
                    <div class="col-span-full space-y-2">
                        <x-table>
                            <x-slot name="head">
                                <tr>
                                    <th class="p-4">Nombre</th>
                                    <th class="p-4">Email</th>
                                    <th class="p-4">Telefono</th>
                                    <th class="p-4 w-14">Accion</th>
                                </tr>
                            </x-slot>
                            <x-slot name="body">
                                @forelse ($merchants as $merchant)
                                <tr class="border-t border-gray-300">
                                    <td class="p-4">
                                        <span>...</span>
                                        <br>
                                        <span>{{ $merchant->name }}</span>
                                    </td>
                                    <td class="p-4">
                                        {{ $merchant->email }}
                                    </td>
                                    <td class="p-4">
                                        {{ $merchant->phone }}
                                    </td>
                                    <td class="p-4 flex justify-end">
                                        <x-icon-link href="{{ route('users.merchants.show', ['merchant' => $merchant->id]) }}" icon="eye" />
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center p-4 text-gray-500">
                                        No hay comerciantes registrados.
                                    </td>
                                </tr>    
                                @endforelse
                            </x-slot>
                        </x-table>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
    <!-- Create register modal -->
    <x-modal name="create-register-modal" title="Registrar comerciante" size="lg">
        @include('users.merchants.form')
    </x-modal>
</div>
