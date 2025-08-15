<div>
    <div class="p-4">
        <x-card>
            <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Negocios
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-button @click="$dispatch('open-modal', 'create-business-modal')" icon="plus" />
                    <x-modal name="create-business-modal" title="Crear o emparejar negocio" size="md">
                        <p class=" text-gray-800">
                            Si el negocio ya existe, puedes emparejarlo con el comerciante. Si no, puedes crear un nuevo
                            negocio.
                        </p>
                        <x-link-button variant="primary-outline" href="{{ route('users.businesses.create') }}"
                            class="w-full mt-4 flex justify-center " label="Emparejar negocio" />
                        <p class=" text-gray-800 mt-2">
                            Si el negocio posee permiso de uso y patente, puedes agregarlo aquí.
                            Si no, puedes crear un nuevo negocio y luego agregarle el permiso de uso y patente.
                        </p>
                        <x-link-button href="{{ route('users.businesses.create') }}"
                            class="w-full mt-4 flex justify-center " label="Crear negocio nuevo" />
                    </x-modal>
                </div>
            </header>
            <div class="hidden md:block">
                {{-- <x-table>
                    <x-slot name="head">
                        <tr>
                            <th class="p-4">Nombre</th>
                            <th class="p-4">Tipo</th>
                            <th class="p-4">Categoría</th>
                            <th class="p-4">Numero</th>
                            <th class="p-4">Lugar</th>
                            <th class="p-4">Teléfono</th>
                            <th class="p-4">Email</th>
                            <th class="p-4 w-14">Acción</th>
                        </tr>
                    </x-slot>
                    <x-slot name="body">
                        @forelse ($businesses as $business)
                            <tr class="border-t border-gray-300">
                                <td class="p-4">
                                    <span>...</span>
                                    <br>
                                    <span>{{ $business->name }}</span>
                                </td>
                                <td class="p-4">
                                    {{ $business->businessType->es_name ?? '...' }}
                                </td>
                                <td class="p-4">
                                    {{ $business->businessCategory->es_name ?? '...' }}
                                </td>
                                <td class="p-4">
                                    {{ $business->merchant_number ?? '...' }}
                                </td>
                                <td class="p-4">
                                    {{ $business->place->name ?? '...' }}
                                </td>
                                <td class="p-4">
                                    {{ $business->phone }}
                                </td>
                                <td class="p-4">
                                    {{ $business->email }}
                                </td>
                                <td class="p-4 flex justify-end">
                                    <x-icon-link
                                        href="{{ route('users.businesses.show', ['business' => $business->id]) }}"
                                        icon="eye" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center p-4 text-gray-500">
                                    No hay comerciantes registrados.
                                </td>
                            </tr>
                        @endforelse
                    </x-slot>
                </x-table> --}}
            </div>
            <div class="col-span-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @forelse ($businesses as $business)
                    {{-- <a href="{{ route('users.businesses.show', ['business' => $business]) }}"
                        class="bg-gray-100 hover:bg-gray-200 flex flex-col p-4 rounded">
                        <header class="flex justify-between items-center">
                            <small class=" text-gray-600">
                                {{ $business->code ?? '...' }}
                            </small>
                            <x-badge color="green">
                                Activado
                            </x-badge>
                        </header>
                        <ul class="text-sm pt-2">
                            <li class="text-gray-800 text-md font-bold ">
                                {{ $business->name ?? '...' }}
                            </li>
                            <li class="text-xs text-gray-600">
                                {{ $business->businessType->es_name ?? '...' }}
                                &bull;
                                {{ $business->businessCategory->es_name ?? '...' }}
                            </li>
                        </ul>
                    </a> --}}
                    <a href="{{ route('users.businesses.show', ['business' => $business]) }}"
                        class="border border-gray-200 hover:bg-gray-200 rounded-lg p-4">
                        <div class="flex flex-col space-x-2">
                            <div class="flex items-center justify-between">
                                <h2 class="text-md text-gray-700 font-light line-clamp-1">{{ $business->name }}</h2>
                                <x-badge color="blue" label="ID" value="{{ $business->code ?? '...' }}" />
                            </div>
                            <div class="pt-2">
                                <ul class="flex items-center space-x-2 text-xs text-gray-600">
                                    <li>
                                        {{ $business->businessType->es_name }}
                                    </li>
                                    <li>
                                        |
                                    </li>
                                    <li>
                                        {{ $business->businessCategory->es_name ?? '...' }}
                                    </li>
                                    <li>
                                        |
                                    </li>
                                    <li>
                                        {{ $merchant->city ?? '...' }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="text-center bg-gray-100 rounded-xl p-4 text-gray-500">
                        No hay negocios registrados.
                    </div>
                @endforelse
            </div>
        </x-card>
    </div>
</div>
