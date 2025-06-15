<x-layouts.agencies>
    <div class=" space-y-4">

        <div class="grid grid-cols-12 gap-2">
            {{-- <div class="col-span-full flex flex-wrap px-4  no-scrollbar overflow-x-auto"> --}}
                <div class="col-span-full grid grid-cols-12 gap-2 px-4">
                    @include('agencies.dashboard.widgets')
        </div>
        {{-- <div class="col-span-full"></div> --}}
        {{-- @include('agencies.dashboard.list') --}}
    </div>
    <div class="grid grid-cols-12 gap-2 px-4">
        @for ($i = 0; $i < 2; $i++)
            
        <x-card class="col-span-12 lg:col-span-6 space-y-2 rounded-xl">
            <header class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    {{ \Illuminate\Support\Str::random(16) }}
                </h2>
                <a href="#" class="text-xs">Ver mas</a>
            </header>
            @for ($x = 0; $x < 5; $x++)
                
            <div class="bg-gray-100 p-2 rounded flex items-center justify-between">
                <div>
                    <span class="text-sm ">
                        {{ \Illuminate\Support\Str::random(24) }}
                    </span>
                    <br>
                    <small class="text-xs text-gray-500">
                        hace {{ rand(1, 30) }} dias
                    </small>
                </div>
                <div>
                    <x-badge color="green" label="" value="" >
                        {{ rand(1, 100) }}%
                    </x-badge>
                </div>
            </div>
            @endfor
        </x-card>
        @endfor
    </div>
    <div class="grid grid-cols-12 gap-2 px-4">
        @for ($i = 0; $i < 4; $i++)
        <x-card class="col-span-12 md:col-span-6 lg:col-span-3 space-y-2 rounded-xl">
            <header class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-gray-900">
                    {{ \Illuminate\Support\Str::random(16) }}
                </h2>
                <a href="#" class="text-xs">Ver mas</a>
            </header>
             @for ($x = 0; $x < rand(2,5); $x++)
                
            <div class="bg-gray-100 p-2 text-xs rounded flex items-center justify-between">
                <span>
                    {{ \Illuminate\Support\Str::random(16) }}
                </span>
                <span class="font-bold text-gray-800">
                    {{ rand(23,500) }}
                </span>
            </div>
            @endfor
        </x-card>
        @endfor
    </div>
</div>
</x-layouts.agencies>
