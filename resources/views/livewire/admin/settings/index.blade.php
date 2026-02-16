<div class="space-y-2">
      <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold">Configuración</h1>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        @foreach ($settings as $setting)
            <x-card class="col-span-12 md:col-span-6 lg:col-span-4">
                <x-card-header>
                    <x-h3>{{ $setting['name'] }}</x-h3>
                </x-card-header>
                <p class="text-gray-700 text-sm">
                    {{ $setting['descriptions'] }}
                </p>
            </x-card>
        @endforeach
    </div>
</div>
