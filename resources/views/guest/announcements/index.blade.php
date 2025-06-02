<x-layouts.guest>
    <main class="max-w-7xl mx-auto px-4 min-h-96">
        <div class="grid grid-cols-12 gap-4">
            <header id="public-announcement" class="col-span-full pt-4">
                <x-title title="Anuncios publicos" />
            </header>

            @for ($i = 0; $i < 14; $i++)
                <a href="{{ route('announcements.show',['announcement' => 1]) }}" class="col-span-full lg:col-span-6 bg-white hover:shadow p-8 rounded flex flex-row space-x-4">
                    <div class="flex flex-col space-y-4">
                        <div class="uppercase text-xs flex flex-col lg:flex-row lg:justify-between space-x-2">
                            <span class="font-bold text-blue-700">
                                fecha de publicacion:25/04/20225
                            </span>
                            <span class="text-gray-700">
                                Contrato: 123456789
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
</x-layouts.guest>