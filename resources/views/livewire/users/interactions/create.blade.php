<div>
    <form wire:submit.prevent="save">
        <div class="p-4">
            <x-card class="">
                <header class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-900">
                        Solicitar asistencia por {{ $type === 'call' ? 'llamada' : 'mensaje' }}
                    </h2>
                </header>
                <div class="grid grid-cols-6 gap-4">
                    <div class="col-span-full lg:col-span-2">
                        <h2 class="text-lg font-bold text-gray-900 mb-2">
                            Información de la interacción
                        </h2>
                        <p class="text-sm text-gray-800">
                            Aquí puedes solicitar asistencia por
                            {{ $type === 'call' ? 'llamada telefónica' : 'mensaje' }}.
                            Por favor, proporciona los detalles necesarios para que podamos ayudarte de la mejor manera
                            posible.
                        </p>
                    </div>
                    <div class="col-span-full lg:col-span-4 grid grid-cols-2 gap-4">

                        <!-- Service -->
                        <div class="col-span-2 lg:col-span-1">
                            <x-label for="service" value="Selecciona el servicio que tienes dudas" />
                            <x-select wire:model="service_id" @class(['w-full'])>
                                <option value="">Seleccione un servicio</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->es_name }}</option>
                                @endforeach
                            </x-select>
                            @error('service_id')
                                <x-error message="{{ $message }}" />
                            @enderror
                        </div>
                        <!-- Name -->
                        <div class="col-span-2 lg:col-span-1 lg:col-start-1">
                            <x-label for="name" value="Nombre completo" />
                            <x-input id="name" type="text" wire:model="name" class="w-full" disabled="true" />
                            @error('name')
                                <x-error message="{{ $message }}" />
                            @enderror
                        </div>
                        @if ($type === 'call')
                            <!-- Teléfono -->
                            <div class="col-span-full lg:col-span-1">
                                <x-label for="phone" value="Número de teléfono" />
                                <x-input id="phone" type="text" wire:model="phone" class="w-full" />
                                @error('phone')
                                    <x-error message="{{ $message }}" />
                                @enderror
                            </div>
                        @endif
                        <!-- Message -->
                        <div class="col-start-1 col-span-2">
                            <div class="flex justify-between items-center">
                                <x-label for="message" value="Mensaje" />
                                <span class="text-xs text-gray-600">240 | {{ $count }}</span>
                            </div>
                            <x-textarea id="message" wire:model.live="message" class="w-full" rows="4" />
                            @error('message')
                                <x-error message="{{ $message }}" />
                            @enderror
                        </div>
                        <!-- Button -->
                        <div class="col-span-2">
                            <x-button type="submit" class="w-full sm:w-auto">
                                Solicitar asistencia
                            </x-button>
                        </div>

                    </div>
                </div>
            </x-card>
        </div>
    </form>
</div>
