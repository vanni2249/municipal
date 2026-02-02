<div>
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <x-icon icon="user-circle" />
        </x-slot>
        <x-slot name="content">

            <x-dropdown-link href="{{ route('users.businesses.index') }}">
                                        Administrar negocios
                                    </x-dropdown-link>
            <x-dropdown-link href="{{ route('users.profile') }}">
                Mi Perfil
            </x-dropdown-link>
            <x-dropdown-link href="{{ route('logout') }}">
                Salir
            </x-dropdown-link>
            <div class="text-sm">
                @foreach (auth()->user()->accounts()->with('accountType')->whereIn('account_type_id', [1, 2])->get() as $item)
                    @if ($item->accountType->slug == 'citizen')
                        <div class="px-4 py-2 border-y border-gray-200 bg-gray-100">
                            <span class="text-xs font-bold text-gray-500">
                                Cuenta de {{ $item->accountType->name }}
                            </span>

                        </div>
                        <x-dropdown-link href="{{ route('citizens.set-session', $item->ulid) }}">
                            {{ $item->number }}
                        </x-dropdown-link>
                    @elseif ($item->accountType->slug == 'merchant')
                        <div class="px-4 py-2 border-y border-gray-200 bg-gray-100">
                            <a href="{{ route('users.businesses.index', $item->ulid) }}" class="text-xs font-bold text-gray-500" wire:navigate>
                                Mis comercio(s)
                            </a>
                        </div>
                        @foreach ($item->businesses()->get() as $business)
                            <x-dropdown-link href="{{ route('businesses.set-session', $business->ulid) }}">
                                <ul>
                                    <li>{{ $business->number }}</li>
                                    <li class="text-xs line-clamp-1">{{ $business->name }}</li>
                                </ul>
                            </x-dropdown-link>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </x-slot>
    </x-dropdown>
</div>
