<div>
    <div class="p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-full space-y-4">
                <!-- Comerciante -->
                <x-card class="rounded-xl p-4">
                    <header class="flex flex-row justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Crear negocio
                        </h2>
                    </header>
                    <div>
                        @include('users.merchants.businesses.form')
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>
