<x-layouts.merchants>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header
                        class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-sm font-bold text-gray-600">
                            Radicaciones
                        </h2>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 3; $i++) 
                        <a href="{{ route('merchants.settlements.show' , ['settlement' => $i]) }}" class="bg-gray-100 hover:bg-gray-200 flex w-full p-2 md:p-4 rounded-xl">
                            <div class="flex w-full justify-between items-start">
                                <div class="grow p-2">
                                    @if (in_array($i, [0]))
                                    <ul class="text-sm">
                                        <li class="text-xs text-gray-600">Finanza</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de renovacion de patente</li>
                                        <li class="text-xs text-gray-600">Farmacia Walwreen LLC</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="yellow">
                                                Proseso de evaluacion
                                            </x-badge>
                                            {{-- <x-badge color="green">
                                                Aprovado
                                                
                                            </x-badge> --}}
                                        </li>
                                    </ul>
                                    @elseif($i == 1)
                                    <ul class="text-sm">
                                        <li class="text-xs">Finanza</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de petente oficial</li>
                                        <li class="text-xs text-gray-600">Farmacia Walwreen LLC</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="green">
                                                Aprovado
                                            </x-badge>
                                        </li>
                                    </ul>
                                    @elseif($i == 2)
                                    <ul class="text-sm">
                                        <li class="text-xs">Finanza</li>
                                        <li class="text-gray-800 text-md font-bold ">Radicacion de patente temporera</li>
                                        <li class="text-xs text-gray-600">Farmacia Walwreen LLC</li>
                                        <li class="text-gray-600 text-xs mt-4">
                                            <x-badge color="green">
                                                Aprovado
                                            </x-badge>
                                        </li>
                                    </ul>
                                    @endif
                                </div>
                                <div class="line-clamp-1">
                                    <span class="text-xs text-gray-600">hace 12 horas</span>
                                </div>
                            </div>
                        </a>
                        @endfor
                    </div>
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
                 @include('users.merchants.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.merchants>