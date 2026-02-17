<div class="space-y-2">
    <x-card class="border-b-4 border-blue-300">
        <header class="flex justify-between items-center">
            <x-h1>
                {{ $service->title }}
            </x-h1>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-12 lg:col-span-8 space-y-2">
            <div class="space-y-2">
                <x-card>
                    <div class=" space-y-4">
                        <div class="flex items-start space-x-2">
                            <div class="p-2 bg-gray-100 rounded-full">

                                <x-icon icon="{{ $service->icon }}" height="56" width="56"
                                    class="stroke-1" />
                            </div>
                            <ul>
                                <li>
                                    <span class="font-bold">
                                        {{ $service->description }}
                                    </span>
                                </li>
                                <li>
                                    <span class=" text-xs text-gray-700 tracking-wide">
                                        {{ $service->serviceType->name }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-2">

                            <p class="text-sm">
                                Para solicitar este servicio, debe estar registrado en el sitio web y haber iniciado
                                sesión. Una
                                vez
                                que haya iniciado sesión, podrá acceder a la página de solicitud del servicio y
                                completar el
                                formulario de solicitud.
                            </p>
                            <ul class="flex flex-row flex-nowrap">
                                <li>

                                    <a href="{{ route('login') }}"
                                        class="block px-4 py-2 border border-black text-black rounded-md hover:bg-black hover:text-white cursor-pointer whitespace-nowrap"
                                        wire:navigate>
                                        Iniciar sesión para solicitar
                                    </a>
                                </li>
                                <li>

                                    <a href="{{ route('register') }}"
                                        class="block ml-2 px-4 py-2 bg-black border border-black text-white rounded-md hover:bg-gray-600 hover:border-gray-600 cursor-pointer whitespace-nowrap"
                                        wire:navigate>
                                        Registrarse
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </x-card>
            </div>

            <div class="grid grid-cols-12 gap-2">
                <x-card class="col-span-full border-b-4 border-blue-300">
                    <header class="col-span-full">
                        <x-h2>
                            Otros servicios del {{ $service->accountType->name }}
                        </x-h2>
                    </header>
                </x-card>
                @foreach ($services as $service)
                    <a href="{{ route('services.show', ['service' => $service->ulid]) }}"
                        class="block bg-white hover:shadow col-span-6 md:col-span-6 p-2 md:p-4 rounded-xl space-x-4"
                        wire:navigate>
                        <x-card-service :service="$service" />
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-span-full lg:col-span-4 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Comunicados" />
                    <a href="{{ route('press-reales.index') }}" class="text-sm text-blue-500 hover:underline"
                        wire:navigate>
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 2; $i++)
                        <a href="{{ route('press-reales.show', $i) }}" class="block" wire:navigate>
                            <x-card-body-list class="hover:bg-gray-200">
                                <span class="text-xs text-gray-700">
                                    12 de Octubre de 2024
                                </span>
                                <p class="text-sm font-bold">
                                    La ultima informacion sobre los eventos administrativos relacionados con el servicio

                                </p>
                            </x-card-body-list>
                        </a>
                    @endfor
                </x-card-body-lists>
            </x-card>
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Eventos" />
                    <a href="{{ route('events.index') }}" class="text-sm text-blue-500 hover:underline" wire:navigate>
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 2; $i++)
                        <a href="{{ route('events.show', $i) }}" class="block" wire:navigate>
                            <x-card-body-list class="hover:bg-gray-200">
                                <span class="text-xs text-gray-700">
                                    12 de Octubre de 2024
                                </span>
                                <p class="text-sm font-bold">
                                    La ultima information sobre los eventos admonistrativos relacionados con el servicio
                                </p>
                            </x-card-body-list>
                        </a>
                    @endfor
                </x-card-body-lists>
            </x-card>
        </div>
    </div>
</div>
