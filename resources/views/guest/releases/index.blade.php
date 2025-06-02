<x-layouts.guest>
    <main class="max-w-7xl mx-auto p-4 min-h-96">
        <div class="grid grid-cols-12 gap-4 max-w-7xl mx-auto">
            <header class="col-span-full flex justify-between items-center">
                <x-title title="Comunicados de prensa" />
            </header>
            @for ($i = 0; $i < 4; $i++)
                <a href="{{ route('releases.show', ['release' => 1]) }}"
                    class="col-span-full lg:col-span-6 bg-white p-8 rounded flex flex-row space-x-4">
                    <div class=" flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler text-gray-600 icons-tabler-outline icon-tabler-file-description">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <path d="M9 17h6" />
                            <path d="M9 13h6" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-4">
                        <div class="uppercase text-xs flex justify-between space-x-2">
                            <span class="font-bold text-blue-700">
                                fecha de publicacion:25/04/20225
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