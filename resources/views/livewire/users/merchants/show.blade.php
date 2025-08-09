<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Comerciante -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comerciante
                        </h2>
                        <div>
                            <x-icon-button @click="$dispatch('open-modal', 'edit-merchant-modal')" icon="edit" />
                        </div>
                    </header>
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            @foreach ($items as $item)
                                <ul>
                                    <li class="text-xs font-bold text-gray-800">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-600">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
                <!-- Comercios -->
                <x-card class="rounded-xl">
                    <header
                        class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comercios
                        </h2>
                        <div>
                            <x-icon-button @click="$dispatch('open-modal', 'create-business-modal')" icon="plus" />
                        </div>
                    </header>
                    <x-table>
                        <x-slot name="head">
                            <tr>
                                <th class="p-4">Nombre</th>
                                <th class="p-4">Tipo de comercio</th>
                                <th class="p-4">Telefono</th>
                                <th class="p-4">Dirreccion</th>
                                <th class="p-4">Patente</th>
                                <th class="p-4 w-14 text-right">Accion</th>
                            </tr>
                        </x-slot>
                        <x-slot name="body">
                            <tr>
                                <td colspan="5" class="text-center p-4 text-gray-500">
                                    No hay comercio registrado.
                                </td>
                            </tr>
                        </x-slot>
                    </x-table>
                </x-card>
                <!-- Edit merchant modal -->
                <x-modal name="edit-merchant-modal" title="Editar comerciante" size="lg">
                    @include('users.merchants.form')
                </x-modal>

                <!-- Create business modal -->
                <x-modal name="create-business-modal" title="Crear comercio" size="lg">
                    @include('users.merchants.businesses.form')
                </x-modal>
            </div>
        </div>
    </div>
</div>
