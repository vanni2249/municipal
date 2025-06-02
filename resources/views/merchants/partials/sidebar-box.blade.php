<x-card class="rounded-xl p-4">
    <header class="flex justify-between items-start mb-4">
        <h2 class=" text-sm font-bold text-gray-900">
            Noticias
        </h2>
        <div>
            <a href="{{ route('merchants.news.index') }}" class="text-xs text-gray-700">
                Ver mas
            </a>
        </div>
    </header>
    <div class="grid grid-cols-12 gap-2">
        @for ($i = 0; $i < 6; $i++) 
        <a href="#"
            class="flex flex-row items-center col-span-full bg-gray-100 text-xs text-gray-700 p-4 hover:bg-gray-200 rounded-xl">
            <div class="grow">
                <small>hace {{ rand(1, 12) }} dias</small>
                <p class="text-sm text-gray-700 font-bold line-clamp-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptates?
                </p>
            </div>
            {{-- <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                        clip-rule="evenodd" />
                </svg>

            </div> --}}

        </a>
        @endfor
    </div>
</x-card>