<x-layouts.guest>
    <main class="max-w-7xl mx-auto p-4 min-h-96">
        <div class="grid grid-cols-12 gap-4">
            <header class="col-span-full flex justify-between items-center">
                <x-title title="Noticias" />
            </header>

            @for ($i = 0; $i < 12; $i++)
                <div class="col-span-full md:col-span-6 bg-white rounded flex flex-col space-x-4">
                    <div class="bg-gray-400 w-full h-64 lg:h-86 rounded-t"></div>
                    <div class="flex flex-col space-y-4 p-4">

                        <a href="{{ route('news.show', ['new' => 1]) }}" class="text-xl font-bold text-gray-800">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                        </a>
                        <div class="uppercase text-xs flex items-center text-blue-700 space-x-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                    <path d="M16 3v4" />
                                    <path d="M8 3v4" />
                                    <path d="M4 11h16" />
                                    <path d="M7 14h.013" />
                                    <path d="M10.01 14h.005" />
                                    <path d="M13.01 14h.005" />
                                    <path d="M16.015 14h.005" />
                                    <path d="M13.015 17h.005" />
                                    <path d="M7.01 17h.005" />
                                    <path d="M10.01 17h.005" />
                                </svg>
                            </span>
                            <span class="font-bold">
                                25/04/20225
                            </span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </main>
</x-layouts.guest>