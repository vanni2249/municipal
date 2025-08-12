<div>
    <x-card class="h-full rounded-xl">
        <header class="flex justify-between items-center mb-4">
            <h1 class="text-lg font-bold">Empleados</h1>
            <x-icon-link href="{{ route('admin.employees.create') }}" icon="plus" />
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
                    <th class="p-2 w-auto">Nombre</th>
                    <th class="p-2 w-auto">Email</th>
                    <th class="p-2 w-auto">Telefono</th>
                    <th class="p-2 w-auto">Estado</th>
                    <th class="p-2 w-auto">Fecha<br />creacion</th>
                    <th class="p-2 w-auto">Ultima<br />conexion</th>
                    <th class="p-2 w-auto text-right">Accion</th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @foreach ($employees as $employee)
                <tr class="border-t border-gray-200">
                    <td class="p-2">
                        <span>
                            {{ $employee->id }}
                        </span>
                        <br>
                        <span>
                            {{ $employee->name }}
                        </span>
                    </td>
                    <td class="p-2">{{ $employee->email }}</td>
                    <td class="p-2">{{ $employee->phone }}</td>
                    <td class="p-2">
                        <x-badge color="green" class="capitalize">Activo</x-badge>
                    </td>
                    <td class="p-2">{{ $employee->created_at->format('d/m/Y') }}</td>
                    <td class="p-2">{{ $employee->getLastLogin() }}</td>
                    <td class="p-2 flex justify-end">
                        <x-icon-link href="{{ route('admin.employees.show', ['employee' => $employee->id]) }}" icon="eye" />
                    </td>
                </tr>
                @endforeach
            </x-slot>
        </x-table>
    </x-card>
</div>