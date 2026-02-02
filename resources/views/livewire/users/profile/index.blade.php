<div>
    <x-card>
        <header class="flex justify-between items-start">
            <div>
                <x-h2 value="Bienvenido, {{ $user->name }}" />
                <ul class="text-sm flex flex-col md:flex-row md:space-x-4 space-y-1 md:space-y-0 text-gray-800 mt-1">
                    <li>{{ $user->number }}</li>
                </ul>
            </div>
            <div class="flex">
                <span class="text-sm text-gray-700">
                    {{ $user->status->statusType->name }}
                </span>
            </div>
        </header>
    </x-card>
</div>
