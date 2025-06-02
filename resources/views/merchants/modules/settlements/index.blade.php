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
                        {{-- <div>
                            <x-dropdown align="right" width="72">
                                <x-slot name="trigger">
                                    <x-button size="sm" class="flex items-center space-x-2">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
                                    </x-button>
                                </x-slot>
                                <x-slot name="content">
                                    @foreach (collect(App\Data\Services\Merchant::items())->where('category', 'settlements') as $item)
                                        <x-dropdown-link href="{{ route($item['route']) }}">
                                            {{ $item['title'] }}
                                        </x-dropdown-link>
                                    @endforeach
                                </x-slot>
                            </x-dropdown>
                        </div> --}}
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
                 @include('merchants.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.merchants>