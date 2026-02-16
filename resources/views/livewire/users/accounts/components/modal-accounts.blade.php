<div>
    <x-button variant="primary" class="flex items-center space-x-1" @click="$dispatch('open-modal', 'accounts-modal')"
        size="sm">
        {{-- <span class="md:hidden">
            <x-icon icon="replace" width="18" height="18" />
        </span> --}}
        <span class="">
            Cambiar
        </span>
    </x-button>


    <x-modal name="accounts-modal" title="Mis cuentas" size="md">
        <div class="space-y-4">
            @foreach ($accounts as $item)
                @if ($item->accountType->slug == 'citizen')
                    <div class="space-y-2">
                        <span class="text-xs text-gray-600 font-bold uppercase">
                            Cuenta de {{ $item->accountType->name }}
                        </span>
                        <ul class="flex justify-between items-center text-sm bg-gray-50 space-y-1 p-2 rounded">
                            <li class="flex flex-col text-sm">
                                <span class="font-bold">
                                    Ciudadano
                                </span>
                                <span class="text-xs">
                                    {{ $item->number }}
                                </span>
                            </li>
                            <li>
                                <a href="{{ route('citizens.set-session', $item->ulid) }}"
                                    class="block bg-black text-white px-3 py-1 rounded hover:bg-gray-800">
                                    Ir al tablero
                                </a>

                            </li>
                        </ul>
                    </div>
                @elseif ($item->accountType->slug == 'merchant')
                    <div class="space-y-2">
                        <span class="text-xs text-gray-600 font-bold uppercase">
                            Mi(s) comercio(s)
                        </span>
                        @foreach ($item->businesses as $business)
                        <ul class="flex justify-between text-sm bg-gray-50 space-y-1 p-2 rounded">
                            <li class="flex flex-col text-sm">
                                <span class="font-bold">
                                    {{ $business->name }}
                                </span>
                                <span class="text-xs">
                                    {{ $business->number }}
                                </span>
                            </li>
                            <li>
                                <a href="{{ route('businesses.set-session', $business->ulid) }}" class="block bg-black text-white px-3 py-1 rounded hover:bg-gray-800">
                                    Ir al tablero
                                </a>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </x-modal>
</div>
