<div>
    <x-card class="rounded-xl">
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold text-gray-800">{{ $employee->name }} {{ $employee->lastname }}</h1>
            <div class="flex items-center space-x-2">
                <x-icon-button @click="$dispatch('open-modal', 'more-info')" icon="eye" />
                <x-icon-link href="{{ route('admin.employees.edit', ['employee' => $employee]) }}" />
            </div>
        </header>
        <ul class="flex flex-wrap text-sm items-center space-x-2 text-gray-700 mt-2 md:mt-0">
            <li>{{ $employee->username }}</li>
            <li>|</li>
            <li>Ultima conexión: {{ $employee->last_login_at ?? 'Nunca' }}</li>
        </ul>
        <ul class="flex space-x-2 text-sm mt-2">
            <li>
                @if ($employee->blocked_at)
                    <x-badge color="red" label="" value="Bloqueado"></x-badge>
                @else
                    <x-badge color="green" label="" value="No bloqueado"></x-badge>
                @endif
            </li>
        </ul>
    </x-card>

    <!-- More info modal -->
    <x-modal name="more-info" title="Mas Información" size="xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($items as $item)
                <x-detail-item-modal :label="$item['label']" :value="$item['value']" />
            @endforeach
        </div>
    </x-modal>
</div>
