<x-layouts.guest>
    <div class="max-w-7xl mx-auto p-4">
        <div class="grid grid-cols-12 gap-4">
            <header class="col-span-full flex justify-between items-center">
                <x-title title="Servicios al contador" />
            </header>
            <div class="col-span-full md:col-span-9">
                <x-card class="space-y-2">
                    @foreach (App\Data\Services\Accountant::items() as $item)

                    <div class="p-4 bg-gray-100 rounded">
                        <h3 class="text-lg font-semibold">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-gray-600 text-sm">
                            {{ $item['sub-title'] }}
                        </p>
                    </div>
                    @endforeach
                </x-card>
            </div>
            <div class="col-span-full md:col-span-3">
                <x-card class="" title="Otros servicios">
                    @include('guest.services.menu')
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.guest>