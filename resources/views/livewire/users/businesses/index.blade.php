<div>
    <div class="p-4">
        <x-card>
            <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    Negocios
                </h2>
                <div class="flex items-center space-x-2">
                    @if (in_array($type, ['merchant', 'merchant-citizen']))
                        <x-icon-link href="{{ route('users.businesses.create') }}" icon="plus" />
                    @endif
                </div>
            </header>
            <div class="col-span-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @forelse ($businesses as $business)
                    <a href="{{ $type === 'accountant'
                        ? route('users.merchants.businesses.show', ['merchant' => $business->register->id, 'business' => $business->id])
                        : route('users.businesses.show', ['business' => $business->id]) }}"
                        class=" bg-gray-100 hover:bg-gray-200 rounded-lg p-4">
                        <x-card-business-user :code="$business->code" :place="$type === 'accountant' ? $business->register->name : $business->place->name" :name="$business->name" :type="$business->businessType->es_name"
                            :category="$business->businessCategory->es_name" />
                    </a>
                @empty
                    <div class="col-span-full text-center p-4 text-gray-500">
                        No hay negocios registrados.
                    </div>
                @endforelse
            </div>
        </x-card>
    </div>
</div>
