<div>
    <x-card>
        <x-card-header class="flex justify-between items-center">
            <x-h2 value="Negocio" />

            <livewire:admin.components.business-create :account="$account" />
        </x-card-header>
        <x-card-body-lists>
            @foreach ($businesses as $business)
                <a href="{{ route('admin.merchants.businesses.show', [
                    'department' => request()->department(),
                    'merchant' => $business->account->ulid,
                    'business' => $business->ulid,
                ]) }}"
                    wire:navigate class="block">

                    <x-card-body-list class="flex justify-between items-start hover:bg-gray-200">
                        <ul>
                            <li class="text-xs text-gray-600">{{ $business->number }}</li>
                            <li>{{ $business->name }}</li>
                            <li class="text-xs text-gray-700">{{ $business->status->statusType->name }}</li>
                        </ul>
                        <x-badge variant="{{ $business->status->statusType->variant }}"
                            label="{{ $business->status->statusType->name }}" />
                    </x-card-body-list>
                </a>
            @endforeach
        </x-card-body-lists>
    </x-card>
    {{-- Be like water. --}}
</div>
