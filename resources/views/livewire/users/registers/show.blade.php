<div>
    <!-- Detail register -->
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header
                        class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-6">
                        <h2 class="text-lg font-bold text-gray-600">
                            Registro
                        </h2>
                        <div>
                            <x-icon-button @click="$dispatch('open-modal', 'edit-register-modal')" icon="edit"
                                class="text-gray-600 hover:text-gray-800" />
                        </div>
                    </header>
                    <div class="col-span-full">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4">
                            @foreach ($items as $item)
                                <ul class="py-1">
                                    <li class="text-xs font-bold text-gray-800">{{ $item['key'] }}</li>
                                    <li class="text-sm text-gray-600">{{ $item['value'] }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
    <!-- Edit form -->
    <x-modal name="edit-register-modal" title="Edita Registro" size="lg">
        @include('users.registers.form')
    </x-modal>
</div>
