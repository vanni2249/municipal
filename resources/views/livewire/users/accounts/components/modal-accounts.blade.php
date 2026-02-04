<div>
    <x-button size="sm" variant="light" class="flex items-center space-x-1"
        @click="$dispatch('open-modal', 'accounts-modal')">
        {{-- <span class="md:hidden">
            <x-icon icon="replace" width="18" height="18" />
        </span> --}}
        <span class="">
            Cambiar
        </span>
    </x-button>


    <x-modal name="accounts-modal" title="Mis cuentas" size="md">
        <div class="space-y-4">
            @foreach (auth()->user()->accounts()->with('accountType')->whereIn('account_type_id', [1, 2])->get() as $item)
                @if ($item->accountType->slug == 'citizen')
                    <div class="space-y-2">
                        <span class="text-xs text-gray-600 font-bold uppercase">
                            Cuenta de {{ $item->accountType->name }}
                        </span>
                        <a href="{{ route('citizens.set-session', $item->ulid) }}" class="block">
                            <ul class="flex justify-between text-sm bg-gray-50 hover:bg-gray-200 space-y-1 p-2 rounded">
                                <li class="font-bold text-gray-800">Ciudadano</li>
                                <li>{{ $item->number }}</li>
                            </ul>
                        </a>
                    </div>
                @elseif ($item->accountType->slug == 'merchant')
                    <div class="space-y-2">
                        <span class="text-xs text-gray-600 font-bold uppercase">
                            Mi(s) comercio(s)
                        </span>
                        @foreach ($item->businesses()->get() as $business)
                            <a href="{{ route('businesses.set-session', $business->ulid) }}" class="block">
                                <ul class="flex justify-between text-sm bg-gray-50 hover:bg-gray-200 space-y-1 p-2 rounded">
                                    <li class="font-bold text-gray-800">{{ $business->name }}</li>
                                    <li>{{ $business->number }}</li>
                                </ul>
                            </a>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </x-modal>
</div>
