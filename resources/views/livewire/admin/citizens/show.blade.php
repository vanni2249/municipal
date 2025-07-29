<div>
    <x-card class="rounded-xl">
        <header class="flex justify-between items-center">
            <h3 class="text-lg font-bold text-gray-800">Detalles del Ciudadano</h3>
            <div>
                @if (!$citizen->user)
                <x-icon-button @click="$dispatch('open-modal', 'edit-citizen-modal')" icon="edit" />
                <x-icon-button @click="$dispatch('open-modal', 'delete-citizen-modal')" icon="delete" />
                @endif
            </div>
            <x-modal name="edit-citizen-modal" title="Editar Ciudadano" size="md">
                @include('admin.citizens.form')
            </x-modal>
            <x-modal name="delete-citizen-modal" title="Eliminar Ciudadano" size="md">
                <p>¿Estás seguro de que deseas eliminar este ciudadano?</p>
                <div class="mt-4">
                    <x-button wire:click="delete" variant="danger">Eliminar</x-button>
                    <x-button variant="light" @click="$dispatch('close-modal', 'delete-citizen-modal')">Cancelar
                    </x-button>
                </div>
            </x-modal>
        </header>
        @php
        $items = [
        ['label' => 'ID de Ciudadano', 'value' => $citizen->code ?? '...'],
        ['label' => 'Nombre', 'value' => $citizen->getName()],
        ['label' => 'Email', 'value' => $citizen->getEmail()],
        ['label' => 'Telefono', 'value' => $citizen->getPhone()],
        ['label' => 'Direccion', 'value' => $citizen->address ? $citizen->address : '...'],
        ['label' => 'Ciudad', 'value' => $citizen->city ?? '...'],
        ['label' => 'Codigo Postal', 'value' => $citizen->postal_code ?? '...'],
        ['label' => 'Fecha de Nacimiento', 'value' => $citizen->date_of_birth ?? '...'],
        
        ];

        $users = [
            ['label' => 'ID de Usuario', 'value' => $citizen->user ? $citizen->user->id : '...'],
        ['label' => 'Aprobado en','value' => $citizen->user ? Carbon\Carbon::parse($citizen->user->approved_at)->format('d/m/Y H:i') : '...'],
        ['label' => 'Aprobado por','value' => $citizen->user ? $citizen->user->approvedBy??'...' : '...'],
        ['label' => 'Ultima conexión','value' => $citizen->user ? Carbon\Carbon::parse($citizen->user->last_login_at)->format('d/m/Y H:i') : '...'],
        ['label' => 'Bloqueado','value' => $citizen->user ? $citizen->user->blocked_at ? 'Si' : 'No' : '...'],
        ['label' => 'Fecha de bloqueo','value' => $citizen->user ? $citizen->user->blocked_at ? Carbon\Carbon::parse($citizen->user->blocked_at)->format('d/m/Y H:i') : '...' : '...'],
        ['label' => 'Bloqueado por','value' => $citizen->user ? $citizen->user->blockedBy??'...' : '...'],
        ];
        @endphp
        <ul class="grid grid-cols-4 text-sm text-gray-800 space-y-4 pt-4">
            @foreach ($items as $item)
            <li class="col-span-4 md:col-span-1 lg:col-span-1">
                <small class="font-bold">{{ $item['label'] }}</small>
                <br>
                <span class="text-gray-600">
                    {!! $item['value'] !!}
                </span>
            </li>
            @endforeach
            @if ($citizen->user)
                @foreach ($users as $user)
                    <li class="col-span-4 md:col-span-1 lg:col-span-1">
                        <small class="font-bold">{{ $user['label'] }}</small>
                        <br>
                        <span class="text-gray-600">
                            {!! $user['value'] !!}
                        </span>
                    </li>
                @endforeach
                <li class="col-span-4 md:col-span-3">
                    <small class="font-bold">Bloqueado razon</small>
                    <br>
                    <span class="text-gray-600">
                        {!! $citizen->user ? $citizen->user->blocked_reason ?? '...' : '...' !!}
                    </span>
                </li>
            @endif

        </ul>
    </x-card>
</div>