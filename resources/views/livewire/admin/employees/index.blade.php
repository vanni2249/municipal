<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Empleados</h1>
        </header>
    </x-card>
    <x-card class="h-full rounded-xl">
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
                    <x-button variant="light" label="Filtro" />
                </div>
            </div>
        </div>
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 w-auto">Number</th>
                    <th class="p-2 w-auto">Name<br>Lastname</th>
                    <th class="p-2 w-auto">Email<br>Phone</th>
                    <th class="p-2 w-auto">Username</th>
                    <th class="p-2 w-auto">Fecha<br/>Nacimiento</th>
                    <th class="p-2 w-auto">Fecha<br/>Contratación</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($employees as $employee)
                    <tr class="border-t border-gray-300">
                        <!-- Name -->
                        <td class="p-2">
                            {{ $employee->number ?? '...' }}
                        </td>
                        <!-- Type -->
                        <td class="p-2 capitalize">
                            <span>
                                {{ $employee->name ?? '...' }}
                            </span>
                            <br>
                            <span>
                                {{ $employee->last_name ?? '...' }}
                            </span>
                        </td>
                        <!-- Email & phone -->
                        <td class="p-2">
                            <span>
                                {{ $employee->email ?? '...' }}
                            </span>
                            <br>
                            <span>
                                {{ $employee->phone ?? '...' }}
                            </span>
                        </td>
                        <!-- Username -->
                        <td class="p-2">
                            {{ $employee->admin->username ?? '...' }}
                        </td>
                        <!-- Birth Date -->
                        <td class="p-2">
                            <x-date-format date="{{ $employee->birth_date }}" format="d/M/Y" />
                        </td>
                        <!-- Hired At -->
                        <td class="p-2">
                            <x-date-format date="{{ $employee->hired_at }}" format="d/M/Y" />
                        </td>
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" 
                            href="{{ route('admin.employees.show', ['department' => request()->department(), 'employee' => $employee->ulid]) }}"
                                icon="arrow-up-right" wire:navigate/>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay administradores disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>
</div>
