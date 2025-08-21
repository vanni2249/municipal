<div>
    <x-card>
        <header>
            <div class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Contadores
                </h2>
                <div class="flex items-center space-x-2">
                    <x-icon-link href="{{ route('admin.accountants.create') }}" icon="plus" />
                </div>
            </div>
        </header>
        @if ($head)
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
                        <x-button variant="light">Filtro</x-button>
                    </div>
                </div>
            </div>
        @endif

        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-4 ">Nombre</th>
                    <th class="p-4 ">Tipo</th>
                    <th class="p-4 ">Email<br/>Teléfono</th>
                    <th class="p-4 ">Creado<br />por</th>
                    <th class="p-4 ">Fecha<br />creación</th>
                    <th class="p-4 text-right">Acción</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($accountants as $accountant)
                    <tr class="border-t border-gray-300">
                        <td class="p-4">
                            <span>
                                {{ $accountant->code }}
                            </span>
                            <br>
                            <span>
                                {{ $accountant->name  }}  {{ $accountant->lastname }}
                            </span>
                        </td>
                        <td class="p-4">
                            <span>
                                {{ $accountant->type->es_name }}
                            </span>
                            <br>
                            @if ($accountant->user_id)
                                <x-badge color="green" value="{{ $accountant->user->name }}" />
                            @endif
                        </td>
                        <td class="p-4">
                            <span>
                                {{ $accountant->email??'...' }}
                            </span>
                            <br>
                            <span>{{ $accountant->phone }}</span>
                        </td>
                        <td class="p-4">
                            <x-badge label="{{ $accountant->createdBy() }}"></x-badge>
                        </td>
                        <td class="p-4">{{ $accountant->created_at->format('d/M/Y')}}</td>
                        <td class="p-4 flex justify-end">
                            <x-icon-link href="{{ route('admin.accountants.show', ['accountant' => $accountant->id]) }}"
                                icon="eye" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay comerciantes disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>

</div>
