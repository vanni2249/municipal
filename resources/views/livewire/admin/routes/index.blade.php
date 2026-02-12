<div class="space-y-4">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Rutas</h1>
            <x-button @click="$dispatch('open-modal','create-route-modal')" label="Crear Ruta" />
        </header>
    </x-card>
    <x-card class="h-full rounded-xl">
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
                    <x-button variant="light" label="Filtro" />
                </div>
            </div>
        </div>
        <x-table>
            <x-slot name="head">
                <tr>
                    <th class="p-2 w-auto">Number</th>
                    <th class="p-2 w-auto">Tipo de Ruta</th>
                    <th class="p-2 w-auto">Inspector</th>
                    <th class="p-2 w-auto">Cantidad</th>
                    <th class="p-2 w-auto">Status</th>
                    <th class="p-2 w-24"></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($routes as $route)
                    <tr class="border-t border-gray-300">
                        <!-- Name -->
                        <td class="p-2">
                            {{ $route->number ?? '...' }}
                        </td>
                        <!-- Type -->
                        <td class="p-2">
                            {{ $route->routeType->name ?? '...' }}
                        </td>
                        <!-- Citizen -->
                        <td class="p-2 capitalize">
                            {{ $route->admin->name }}
                        </td>
                        <!-- Business -->
                        <td class="p-2 capitalize">
                            @if ($route->routeType->slug == 'inspection')
                                {{ $route->inspections->count() ?? '0' }}
                            @else
                                ...
                                
                            @endif
                        </td>
                        <!-- Status -->
                        <td class="p-2">
                            <x-badge label="{{ $route->status->statusType->name ?? '...' }}" variant="{{ $route->status->statusType->variant ?? 'secondary' }}" />
                        </td>
                        <td class="p-2 flex space-x-2 justify-end">
                            <x-icon-link variant="light" href="{{ route('admin.routes.show', ['route' => $route->ulid]) }}"
                                icon="eye" wire:navigate/>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay rutas disponibles.</td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </x-card>

    <!-- Create Route Modal -->
    <x-modal name="create-route-modal" title="Crear Ruta" size="md">
       <form wire:submit.prevent="createRoute">
            <x-form-elements>
                <!-- Select route types -->
                <x-form-element class="col-span-full">
                    <x-label for="route_type_id" value="Tipo de Ruta" />
                    <x-select wire:model="route_type_id" id="route_type_id" @class(['w-full', 'border-red-500' => $errors->has('route_type_id')])>
                        <option value="">Seleccione tipo de ruta</option>
                        @foreach ($routeTypes as $routeType)
                            <option value="{{ $routeType->id }}">{{ $routeType->name }}</option>
                        @endforeach
                    </x-select>
                    @error('route_type_id')
                        <x-error :message="$message" />
                    @enderror
                </x-form-element>

                <!-- If route type is inspection, show inspections -->
                @if ($route_type_id == 1)
                    <x-form-element class="col-span-full">
                        <x-label for="inspections" value="Inspecciones" />
                        <x-select wire:model="inspections" id="inspections" multiple @class(['w-full', 'border-red-500' => $errors->has('inspections')])>
                            @foreach ($inspections as $inspection)
                                <option value="{{ $inspection->id }}">{{ $inspection->number }}</option>
                            @endforeach
                        </x-select>
                        @error('inspections')
                            <x-error :message="$message" />
                        @enderror
                    </x-form-element>
                @endif

                <x-form-element class="col-span-full">
                    <x-button type="submit" label="Crear Ruta" class="w-full" />
                </x-form-element>
            </x-form-elements>
       </form>
    </x-modal>
</div>
