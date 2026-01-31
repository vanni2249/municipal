<div>
    <x-card>
        <x-card-elements-group>
            @foreach ($businesses as $business)
                <x-card-element class="flex justify-between items-center border-l-4 border-gray-400">
                    <div>
                        <strong class="text-sm">{{ $business->name }}</strong>
                        <br>
                        <span class="text-gray-700 text-sm">{{ $business->number }}</span>
                    </div>
                    <x-icon-link href="{{ route('businesses.set-session', ['business' => $business->ulid]) }}"
                        icon="arrow-right" variant="primary" size="xs" wire:navigate />
                </x-card-element>
            @endforeach
        </x-card-elements-group>
    </x-card>
</div>
