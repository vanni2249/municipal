<div>
    <div class=" p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comerciantes
                        </h2>
                        <div class="flex items-center space-x-2">
                            <x-icon-link href="{{ route('users.merchants.create') }}" icon="plus" />
                        </div>
                    </header>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @forelse ($merchants as $merchant)
                            <a href="{{ route('users.merchants.show', ['merchant' => $merchant]) }}"
                                class="bg-gray-100 hover:shadow-md shadow rounded-lg p-4">
                                <div class="flex flex-col space-x-2">
                                    <div class="flex justify-between items-center">
                                        <span>
                                            <x-badge value="{{ $merchant->code }}" />
                                        </span>
                                        <span
                                            class="border hidden md:block border-gray-400 text-gray-800 rounded-full text-xs px-2">{{ $merchant->businessesCount() }}</span>
                                    </div>
                                    <div class="flex items-center justify-between py-2">
                                        <h2 class="text-lg font-light line-clamp-1 text-gray-900">{{ $merchant->name }}
                                            {{ $merchant->lastname }}</h2>
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="border border-blue-400 text-blue-800 rounded-full px-2 text-xs">{{ $merchant->email ?? 'Sin correo' }}</span>
                                        <span
                                            class="border border-blue-400 text-blue-800 rounded-full px-2 text-xs">{{ $merchant->phone }}</span>
                                        @if ($merchant->user)
                                            <span
                                                class="border border-green-400 bg-green-200 text-green-600 rounded-full px-2 text-xs">{{ $merchant->user ? 'Usuario' : '' }}</span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="col-span-full text-center p-4 text-gray-500">
                                No hay comerciantes registrados.
                            </div>
                        @endforelse
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>
