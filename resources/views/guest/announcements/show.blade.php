<x-layouts.guest>
     <main class="max-w-7xl mx-auto py-8 lg:py-8 px-4 min-h-96">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full lg:col-span-8">
                <div class="bg-white rounded p-4 space-y-4">
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
                    @for ($i = 0; $i < 10; $i++)
                        <p class="text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatibus dolorum, nulla,
                            soluta cupiditate, praesentium repudiandae odit adipisci vero dolore quisquam? Distinctio
                            perferendis adipisci, ex deserunt pariatur rerum minima! Perspiciatis.
                        </p>
                    @endfor
                </div>
            </div>
            <div class="col-span-full lg:col-span-4">
                <div class=" rounded bg-white">
                    <header class="p-4">
                        <h2 class="uppercase text-sm font-bold text-gray-700">Mas anuncios</h2>
                    </header>
                    <ul class="">
                        @for ($i = 0; $i < 2; $i++)
                            <li>
                                <a href="{{ route('announcements.show', ['announcement' => 1]) }}"
                                    class="text-gray-700 hover:text-blue-700 flex p-4 text-sm  flex-col  border-t border-gray-200">
                                    <span class="font-bold text-blue-700 uppercase text-xs">
                                        fecha de publicacion:25/04/20225
                                    </span>
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt.
                                    </span>
                                </a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </main>
</x-layouts.guest>