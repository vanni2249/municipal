<div>
    <x-card>
        <x-card-elements-group>
            @foreach ($businesses as $business)
                <a href="{{ route('businesses.set-session', ['business' => $business->ulid]) }}" class="block">
                    <x-card-element class="flex justify-between items-center  hover:bg-gray-200" border="secondary">
                        <div>
                        <strong class="text-sm">{{ $business->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                    </div>
                    <div>
                        <x-icon icon="arrow-right" size="5" class="text-gray-400" />
                    </div>
                    {{-- <x-icon-link href=""
                        icon="arrow-right" variant="primary" size="xs" wire:navigate /> --}}
                    </x-card-element>
                </a>
            @endforeach
        </x-card-elements-group>
    </x-card>
</div>
