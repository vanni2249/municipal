<x-layouts.users>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-sm font-bold text-gray-800">
                            Solicitudes
                        </h2>
                        <div>
                            <x-dropdown align="right" width="72">
                                <x-slot name="trigger">
                                    <x-button size="sm" class="flex items-center space-x-2">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
                                    </x-button>
                                </x-slot>
                                <x-slot name="content">
                                        @foreach (collect(App\Data\Services\User::items())->where('category', 'applications') as $item)
                                            <x-dropdown-link href="{{ route($item['route']) }}">
                                                {{ $item['title'] }}
                                            </x-dropdown-link>
                                        @endforeach
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </header>
                    <div class="col-span-full">
                        @livewire('users.applications.list-applications')
                    </div>
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
                 @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>