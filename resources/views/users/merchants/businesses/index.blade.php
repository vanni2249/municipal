<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Comercios
                        </h2>
                        <div>
                            <x-dropdown align="right" width="72">
                                <x-slot name="trigger">
                                    <x-button size="sm" variant="light" class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 6h16" />
                                            <path d="M7 12h13" />
                                            <path d="M10 18h10" />
                                        </svg>
                                    </x-button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link href="{{ route(request()->segment(1) . '.businesses.create') }}">
                                        Crear comercio
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 3; $i++)
                            <a href="{{ route(request()->segment(1) . '.businesses.show', ['business' => 1]) }}" class="bg-gray-100 hover:bg-gray-200 flex w-full p-2 md:p-4 rounded-xl">
                                <div class="flex w-full justify-between items-start">
                                    <div class="grow">
                                        <ul class="text-sm">
                                            <li class="text-xs text-gray-600">Venta por mayorista</li>
                                            <li class="text-gray-800 text-md font-bold ">Farmacia Walgreens LLC</li>
                                            <li class="text-xs text-gray-600"></li>
                                            <li class="text-gray-600 text-xs mt-4">
                                                <x-badge color="green">
                                                    Activo
                                                </x-badge>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="line-clamp-1">
                                        <span class="text-xs text-gray-600 whitespace-nowrap">
                                            {{-- {{ now()->subHours(12)->diffForHumans() }} --}}
                                            Patente oficial
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endfor
                    </div>
                </x-card>
            </div>
            <div class="col-span-full lg:col-span-4">
                @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>
