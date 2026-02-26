<div>
    @if ($merchant->status->statusType->slug == 'active')

        <x-card>
            <x-card-header class="">
                <div class="flex justify-between items-start">
                    <x-h2 value="Mi(s) negocio(s)" />
                    <div>
                        @if ($businesses->isNotEmpty() ? $businesses->last()->status->statusType->slug != 'pending' : true)
                            <x-button wire:click="$dispatch('open-modal', 'create-business-modal')" size="sm"
                                variant="primary" class="whitespace-nowrap">
                                Crear nuevo negocio
                            </x-button>
                        @endif
                    </div>
                </div>

                <p class="text-sm text-gray-700">
                    Gestiona y navega entre los negocios asociados a tus cuentas de comerciante.
                </p>
            </x-card-header>
            @if ($businesses->isNotEmpty() && $businesses->last()->status->statusType->slug == 'pending' ?? false)
                <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-sm border-l-4 border-l-yellow-400">
                    <p class="text-sm">
                        Has solicitado la creación de un nuevo negocio. Tu solicitud está siendo revisada por el equipo
                        administrativo.
                        Recibirás una notificación por correo electrónico una vez que tu negocio haya sido aprobado o
                        rechazado. Mientras tanto, puedes revisar el estado de tu solicitud en la sección de cuentas de
                        tu
                        panel
                        de usuario.
                    </p>
                </div>
            @endif
            <div class="space-y-2">
                @forelse ($businesses as $business)
                    <div class="p-2 bg-gray-50 border border-gray-200 rounded-lg border-l-4 border-l-green-400">
                        <div class="flex justify-between items-center">
                            <!-- Business Info -->
                            <div>
                                <strong class="text-sm">{{ $business->name }}</strong>
                                <br>
                                <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                            </div>

                            <!-- Business Dashboard Button -->
                            <div>
                                @if ($business->status->statusType->slug == 'active')
                                    <x-link-button href="{{ route('businesses.set-session', $business->ulid) }}"
                                        variant="primary">
                                        Ir al tablero
                                    </x-link-button>
                                @else
                                    <x-badge variant="{{ $business->status->statusType->variant }}"
                                        label="{{ $business->status->statusType->name }}" />
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-lg text-center">
                        <p class="text-sm text-yellow-700">
                            No tienes negocios asociados a tus cuentas de comerciante.
                        </p>
                    </div>
                @endforelse
            </div>
        </x-card>
    @endif

    <!-- Create business modal -->
    <x-modal name="create-business-modal" title="Crear nuevo negocio" size="md">
        <form wire:submit.prevent="createBusiness">
            <div class="space-y-4">
                <!-- Business type -->
                <div>
                    <x-label for="business_type_id" value="Tipo de negocio" />
                    <x-select id="business_type_id" @class([
                        'mt-1 block w-full',
                        'border-red-500' => $errors->has('business_type_id'),
                    ]) wire:model.defer="business_type_id">
                        <option value="">Seleccione un tipo de negocio</option>
                        @foreach ($business_types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </x-select>
                    @error('business_type_id')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- Business name -->
                <div>
                    <x-label for="business_name" value="Nombre del negocio" />
                    <x-input id="business_name" type="text" @class([
                        'mt-1 block w-full',
                        'border-red-500' => $errors->has('business_name'),
                    ])
                        wire:model.defer="business_name" autocomplete="off" />
                    @error('business_name')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <!-- Address -->
                <div>
                    <x-label for="business_address" value="Dirección" />
                    <x-input id="business_address" type="text" @class([
                        'mt-1 block w-full',
                        'border-red-500' => $errors->has('business_address'),
                    ])
                        wire:model.defer="business_address" autocomplete="off" />
                    @error('business_address')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>

                <!-- Place and Postal Code -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Place -->
                    <div>
                        <x-label for="business_place_id" value="Lugar" />
                        <x-select id="business_place_id" @class([
                            'mt-1 block w-full',
                            'border-red-500' => $errors->has('business_place_id'),
                        ])
                            wire:model.defer="business_place_id">
                            <option value="">Seleccione un lugar</option>
                            @foreach ($places as $place)
                                <option value="{{ $place->id }}">{{ $place->name }}</option>
                            @endforeach
                        </x-select>
                        @error('business_place_id')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <!-- Zip code -->
                    <div>
                        <x-label for="business_postal_code" value="Código postal" />
                        <x-input id="business_postal_code" type="text" @class([
                            'mt-1 block w-full',
                            'border-red-500' => $errors->has('business_postal_code'),
                        ])
                            wire:model.defer="business_postal_code" autocomplete="off" />
                        @error('business_postal_code')
                            <x-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <!-- Submit button -->
                <div>
                    <x-button type="submit" variant="primary">
                        Crear comercio
                    </x-button>
                </div>
            </div>
        </form>
    </x-modal>
</div>
