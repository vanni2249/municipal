<x-layouts.guest>
    <main class="max-w-7xl mx-auto p-4 min-h-96">
        <div class="grid grid-cols-12 gap-4">
        <header class="col-span-full flex justify-between items-center">
                <x-title title="Facilidades del municipio" />
            </header>
        @foreach (App\Data\Facility::items() as $item)
        <a href="{{ route('facilities.show', ['facility' => $item['slug']]) }}" class="col-span-full hover:shadow md:col-span-6 lg:col-span-4">
            <x-card>
                <span class="text-xs font-bold text-gray-600 uppercase">{{ $item['category'] }}</span>
                <h2 class="text-xl font-bold py-4">{{ $item['name'] }}</h2>
                <ul class="text-gray-600 space-y-1">
                    <li class="flex items-center space-x-2 text-sm">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path
                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                        </span>
                        <span>
                            {{ $item['location'] }}
                        </span>
                    </li>
                    <li class="flex items-center space-x-2 text-sm">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 7v5l3 3" />
                            </svg>
                        </span>
                        <span>
                            {{ $item['opening_hours'] }}
                        </span>
                    </li>
                </ul>
            </x-card>
        </a>
        @endforeach
        </div>
    </main>
</x-layouts.guest>