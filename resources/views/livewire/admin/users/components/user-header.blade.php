<div>
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
                <li class="">|</li>
                <li class="line-clamp-1">
                    Ultima conexión:
                    {{ $user->session ? \Carbon\Carbon::parse($user->session->created_at)->diffForHumans() : '...' }}
                </li>
            </ul>
        </x-card-header>
    </x-card>
</div>
