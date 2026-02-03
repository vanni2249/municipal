<div>
    <x-card>
        <header class="flex justify-between items-center">
            <x-h2 value="Comercios" />
            <div class="flex">
                <x-icon-link href="{{ route('users.businesses.create') }}" icon="plus" variant="light" wire:navigate/>
            </div>
        </header>
    </x-card>
</div>
