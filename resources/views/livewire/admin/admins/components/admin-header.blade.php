<div>
    <x-card>
        <!-- Admin Information -->
        <x-card-header>
            <div class="flex justify-between items-start">
                <x-h1 :value="$administrator->name . ' ' . $administrator->lastname" />
                <x-badge :variant="$administrator->status->statusType->variant" :label="$administrator->status->statusType->name" />
            </div>
            <ul class="hidden md:flex space-x-2 text-sm text-gray-700">
                <li class="line-clamp-1">
                    {{ $administrator->number }}
                </li>
                <li class="">|</li>
                <li class="line-clamp-1">
                    Ultima conexión:
                    {{ $administrator->session ? \Carbon\Carbon::parse($administrator->session->created_at)->diffForHumans() : '...' }}
                </li>
            </ul>
        </x-card-header>
    </x-card>
</div>
