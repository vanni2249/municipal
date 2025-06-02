<x-layouts.guest>
     <main class="max-w-7xl mx-auto py-8 lg:py-8 px-4 min-h-96">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <div class="bg-white rounded p-4 space-y-4">
                    <div class="bg-gray-400 h-45 lg:h-96 rounded"></div>
                    <div class="uppercase text-xs font-bold text-blue-700 flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
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
                        <span>
                            Viernes, Abr 25, 20225
                        </span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 line-clamp-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                    </h2>
                    <ul class="flex flex-col space-y-2">
                        <li class="flex items-center space-x-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clock">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                </svg>
                            </span>
                            <span>
                                10:00 AM - 12:00 PM
                            </span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                </svg>
                            </span>
                            <span class="line-clamp-1">
                                Northwest Recreation Center 2913 Northland Dr. Austin TX 78757
                            </span>
                        </li>
                    </ul>
                    @for ($i = 0; $i < 10; $i++)
                        <p class="text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatibus dolorum,
                            nulla,
                            soluta cupiditate, praesentium repudiandae odit adipisci vero dolore quisquam?
                            Distinctio
                            perferendis adipisci, ex deserunt pariatur rerum minima! Perspiciatis.
                        </p>
                    @endfor
                </div>
            </div>
            <div class="col-span-full lg:col-span-4">
                <div class=" rounded bg-white">
                    <header class="p-4">
                        <h2 class="uppercase text-sm font-bold text-gray-700">Mas eventoss</h2>
                    </header>
                    <ul class="">
                        @for ($i = 0; $i < 2; $i++)
                            <li>
                                <a href="{{ route('events.show', ['event' => 1]) }}"
                                    class="text-gray-700 hover:text-blue-700 flex p-4 text-sm space-y-4  flex-col  border-t border-gray-200">
                                    <div class="uppercase text-xs font-bold text-blue-700 flex items-center space-x-2">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                        <span>
                                            Viernes, Abr 25, 20225
                                        </span>
                                    </div>
                                    <h2 class="text-lg font-bold text-gray-800 line-clamp-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                                    </h2>
                                    <ul class="flex flex-col space-y-2">
                                        <li class="flex items-center space-x-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clock">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                    <path d="M12 7v5l3 3" />
                                                </svg>
                                            </span>
                                            <span>
                                                10:00 AM - 12:00 PM
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                    <path
                                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                                </svg>
                                            </span>
                                            <span class="line-clamp-1">
                                                Northwest Recreation Center 2913 Northland Dr. Austin TX 78757
                                            </span>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </main>
</x-layouts.guest>