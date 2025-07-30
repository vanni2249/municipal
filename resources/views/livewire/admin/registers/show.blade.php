<div>
    <x-card class="rounded-xl">
        <header class="flex justify-between items-center">
            <h3 class="font-bold text-lg text-gray-800">Detalles del registro</h3>
            <x-icon-button icon="edit" @click="$dispatch('open-modal', 'edit-register-modal')" />
        </header>
        <ul class="grid grid-cols-4 text-sm text-gray-600 space-y-4 py-4">
            @foreach ($items as $item)
            <li class="col-span-4 md:col-span-2 lg:col-span-1">
                <small class="font-bold">{{ $item['label'] }}</small>
                <br>
                <span>
                    {!! $item['value'] !!}
                </span>
            </li>
            @endforeach
        </ul>
    </x-card>

    <!-- Modal edit register -->
    <x-modal name="edit-register-modal" title="Editar registro" size="lg">
        <form wire:submit.prevent="updateRegister" class="space-y-2">
            @include('admin.registers.form')
        </form>
    </x-modal>
</div>