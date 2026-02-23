<div class="space-y-2">
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-full">
            <x-card>
                <!-- User Information -->
                <x-card-header>
                    <div class="flex justify-between items-start">
                        <x-h1 :value="$user->name . ' ' . $user->lastname" />
                        <x-badge :variant="$user->status->statusType->variant" :label="$user->status->statusType->name" />
                    </div>
                    <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                        <li class="line-clamp-1">
                            {{ $user->number }}
                        </li>
                    </ul>
                </x-card-header>
            </x-card>
            {{-- @livewire('admin.users.components.user-header', ['user' => $user], key($user->id)) --}}
        </div>
    </div>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-full lg:col-span-5 space-y-2">
            <!-- User detail -->
            <livewire:admin.components.user-detail :user="$user" />
            
            <!-- Accounts -->
            <livewire:admin.components.user-accounts :user="$user" />

            
            
            <!-- Statues -->
            {{-- <x-card>
                <x-card-header class="flex justify-between items-center">
                    <x-h2 value="Estados" />
                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-icon-button icon="ellipsis-vertical" variant="light" />
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="#">Editar</x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </x-card-header>
                <x-card-body-lists>
                    @foreach ($user->statuses as $status)
                        <x-card-body-list class="flex justify-between items-center">
                            <div>
                                <strong class="text-sm">{{ $status->statusType->name }}</strong>
                                <br>
                                <span class="text-gray-700">
                                    <x-date-format date="{{ $status->created_at }}" format="d/M/Y H:i:s" />
                                </span>
                            </div>
                            <x-badge :variant="$status->statusType->variant" :label="$status->statusType->name" />
                        </x-card-body-list>
                    @endforeach
                </x-card-body-lists>
            </x-card> --}}

        </div>
        <div class="col-span-full lg:col-span-7">
            <!-- Session -->
            <x-card class="">
                {{-- <x-card-header>
                    <x-h2 value="Sesiones" />
                </x-card-header>
                <x-card-body-lists>
                    @foreach ($user->sessions as $session)
                        <x-card-body-list class="flex justify-between items-center">
                            <ul class="text-sm text-gray-700">
                                <li>{{ $session->device_info ?? 'No detecto el equipo' }}</li>
                                <li>{{ $session->platform ?? 'No detecto la plataforma' }}</li>
                            </ul>
                            <x-diff-humans date="{{ $session->created_at }}" />
                        </x-card-body-list>
                    @endforeach
                </x-card-body-lists> --}}
            </x-card>
            {{-- @livewire('admin.users.components.user-sessions', ['user' => $user], key($user->id)) --}}

        </div>
    </div>
</div>
