<div>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-full lg:col-span-full">
            <x-card class="rounded-xl">
                <!-- User Information -->
                <header class="flex justify-between items-center">
                    <div class="flex flex-col space-x-4">
                        <h3 class="font-bold text-lg text-gray-900 line-clamp-1">{{ $user->name }}</h3>
                    </div>
                    <div class="flex space-x-2">
                        <x-icon-button @click="$dispatch('open-modal', 'more-detail')" icon="eye" />
                        <x-icon-link href="{{ route('admin.users.edit', ['user' => $user]) }}" />
                    </div>
                </header>
                <ul class="flex space-x-2 text-sm text-gray-800">
                    <li class="line-clamp-1">
                        {{ $user->register->type->es_name }}
                    </li>
                    <li>|</li>
                    <li class="line-clamp-1">
                        @if ($user->approved_at)
                            <x-badge color="green" class="capitalize">Aprobado</x-badge>
                        @else
                            <x-badge color="red" class="capitalize">No aprobado</x-badge>
                        @endif
                    </li>
                    <li>|</li>
                    <li>
                        @if ($user->blocked_at)
                            <x-badge color="red" class="capitalize">Bloqueado</x-badge>
                        @else
                            <x-badge color="green" class="capitalize">No bloqueado</x-badge>
                        @endif
                    </li>
                    <li class="hidden md:block">|</li>
                    <li class="line-clamp-1 hidden md:block">
                        Last conexión:
                        {{ $user->last_login_at ? \Carbon\Carbon::parse($user->last_login_at)->diffForHumans() : 'Nunca' }}
                    </li>
                </ul>
                <x-modal name="more-detail" title="Más detalles de {{ $user->name }}">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($items as $item)
                            <x-detail-item-modal label="{{ $item['label'] }}" value="{{ $item['value'] }}" />
                        @endforeach
                    </div>
                </x-modal>
            </x-card>
        </div>
    </div>
</div>
