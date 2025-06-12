<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
     <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold text-gray-900">
                            Solicitar asistencia por mensaje
                        </h2>
                    </header>
                    <div class="">
                        @livewire('merchants.interactions.messages.create-message')
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>