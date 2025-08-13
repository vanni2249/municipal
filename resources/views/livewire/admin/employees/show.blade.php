<div>
    <x-card class="rounded-xl">
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold text-gray-800">Detalles del empleado</h1>
            <div class="flex items-center space-x-2">
                <x-icon-link href="{{ route('admin.employees.edit', ['employee' => $employee]) }}" />
                <x-icon-button @click="$dispatch('open-modal', 'more-info')" icon="eye" />
            </div>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 pt-4">
            @foreach ($items->take(4) as $item)
                <x-detail-item :label="$item['label']" :value="$item['value']" />
            @endforeach
        </div>
    </x-card>

    <!-- More info modal -->
    <x-modal name="more-info" title="Mas Informacion" size="xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($items as $item)
                <x-detail-item-modal :label="$item['label']" :value="$item['value']" />
            @endforeach
        </div>
    </x-modal>
</div>
