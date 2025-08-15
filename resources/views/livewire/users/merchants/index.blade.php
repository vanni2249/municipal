<div>
    <div class=" p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comerciantes
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-icon-link href="{{ route('users.merchants.create') }}" icon="plus" />
                        </div>
                    </header>
                    <div class="col-span-full">
                        {{-- <x-table>
                            <x-slot name="head">
                                <tr>
                                    <th class="p-4">Nombre</th>
                                    <th class="p-4">Email</th>
                                    <th class="p-4">Teléfono</th>
                                    <th class="p-4 w-14">Acción</th>
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
                                            {{ $merchant->email ?? '...' }}
                                        </td>
                                        <td class="p-4">
                                            {{ $merchant->phone ?? '...' }}
                                        </td>
                                        <td class="p-4 flex justify-end">
                                            <x-icon-link
                                                href="{{ route('users.merchants.show', ['merchant' => $merchant->id]) }}"
                                                icon="eye" />
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
                        </x-table> --}}
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            @foreach ($merchants as $merchant)
                                <a href="{{ route('users.merchants.show', ['merchant' => $merchant]) }}"
                                    class="border border-gray-200 hover:bg-gray-200 rounded-lg p-4">
                                    <div class="flex flex-col space-x-2">
                                        <div class="flex items-center justify-between">
                                            <h2 class="text-xl font-light line-clamp-1">{{ $merchant->name }}</h2>
                                            <x-badge color="blue" label="ID" value="{{ $merchant->id }}" />
                                        </div>
                                        <div class="pt-4">
                                            <ul class="flex items-center space-x-2 text-xs text-gray-600">
                                                <li>
                                                    Negocios: 2
                                                </li>
                                                <li>
                                                    |
                                                </li>
                                                <li>
                                                    {{ $merchant->phone ?? '...' }}
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
                            @endforeach
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>
