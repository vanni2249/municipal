<x-layouts.users>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full">
                <x-card class="rounded-xl p-4 h-full">
                    <header
                        class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 mb-6">
                        <h2 class="text-sm md:text-xl lg:text-lg font-bold text-gray-800">
                            Noticias
                        </h2>
                    </header>
                    <div class="col-span-full">
                        <div class="grid grid-cols-12 gap-4">
                            @for ($i = 0; $i < 8; $i++)
                            <a href="{{ route('users.news.show', ['new' => $i]) }}" class="col-span-6 md:col-span-4 lg:col-span-3">
                                <div class="bg-gray-100 hover:bg-gray-200 rounded-xl p-2">
                                    <div class="bg-gray-300 h-48 rounded-xl"></div>
                                    <div class="p-2">
                                        <p class="line-clamp-2 text-sm text-gray-800">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ullam sint itaque pariatur, reiciendis expedita quod suscipit minima veritatis ex.
                                        </p>
                                        <small class="text-xs text-gray-500">01/01/2023</small>
                                    </div>
                                </div>
                            </a>
                            @endfor
                        </div>
                        {{-- @livewire('users.applications.list-applications') --}}
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.users>