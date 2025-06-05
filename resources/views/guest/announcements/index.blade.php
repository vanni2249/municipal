<x-layouts.welcome>
    <main class="max-w-7xl mx-auto px-4 min-h-96">
        <div class="grid grid-cols-12 gap-4 pb-4">
            <header id="public-announcement" class="col-span-full">
                <x-title title="Anuncios publicos" />
            </header>

            @for ($i = 0; $i < 14; $i++)
                <a href="{{ route('announcements.show',['announcement' => 1]) }}" class="col-span-full lg:col-span-6 bg-white hover:shadow p-4 md:p-6 lg:p-8 rounded-xl flex flex-row space-x-4">
                    <div class="flex flex-col space-y-4">
                        <div class="uppercase text-xs flex flex-row justify-between space-x-2">
                            <span class="font-bold text-gray-600">
                                25/04/20225
                            </span>
                            <span class="text-gray-600">
                                123456789
                            </span>
                        </div>

                        <h2 class="text-xl font-bold text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                        </h2>
                    </div>
                </a>
            @endfor
        </div>
    </main>
</x-layouts.welcome>