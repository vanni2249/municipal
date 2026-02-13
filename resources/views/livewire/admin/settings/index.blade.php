<div class="space-y-4">
    {{-- <x-card> --}}
    {{-- <x-card-header> --}}
    <div class="px-2">
        <x-h2 value="Configuración" />
    </div>
    {{-- </x-card-header> --}}
    {{-- </x-card> --}}
    <div class="grid grid-cols-12 gap-4">
        @foreach ($settings as $setting)
            <x-card class="col-span-12 md:col-span-6 lg:col-span-4">
                <div class="flex items-center gap-2">
                    {{-- <x-icon name="cog" class="w-5 h-5 text-gray-500" /> --}}
                    <span class="text-sm font-medium text-gray-700">{{ $setting['name'] }}</span>
                </div>
                <p class="text-sm text-gray-600">{{ $setting['descriptions'] }}</p>
            </x-card>
        @endforeach
    </div>
</div>
