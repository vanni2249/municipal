<div class="space-y-2">
    <x-card class="border-b-4 border-blue-300">
        <x-card-header class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="p-2 flex bg-blue-100 rounded-full">

                    <x-icon icon="{{ $service->icon }}" height="32" width="32" class="stroke-1" />
                </div>
                <x-h1 value=" {{ $service->title }}" />
            </div>

        </x-card-header>
    </x-card>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-12 lg:col-span-8 space-y-2">
            <div class="space-y-2">
                <x-card>
                    <div class="">
                        <div class="flex justify-between items-center space-x-2 mb-2">
                            <x-h3 value="Descripción" />
                            <span class="text-xs font-bold uppercase text-gray-800">
                                {{ $service->serviceType->name }}
                            </span>
                        </div>
                        <p class=" text-gray-900">
                            {{ $service->description }}
                        </p>
                        <div class="mt-4 space-y-2 flex flex-col bg-gray-100 p-4 rounded-md">

                            <p class="text-sm text-gray-700">
                                Para solicitar este servicio, debe estar registrado en el sitio web y haber iniciado
                                sesión. Una
                                vez
                                que haya iniciado sesión, podrá acceder a la página de solicitud del servicio y
                                completar el
                                formulario de solicitud.
                            </p>
                            <ul class="flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-4">
                                <li class="flex">

                                    <a href="{{ route('login') }}"
                                        class="flex w-auto px-4 py-2 border border-black text-black rounded-md hover:bg-black hover:text-white cursor-pointer whitespace-nowrap"
                                        wire:navigate>
                                        Iniciar sesión para solicitar
                                    </a>
                                </li>
                                <li class="flex">

                                    <a href="{{ route('register') }}"
                                        class="flex w-auto px-4 py-2 bg-black border border-black text-white rounded-md hover:bg-gray-600 hover:border-gray-600 cursor-pointer whitespace-nowrap"
                                        wire:navigate>
                                        Registrarse
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </x-card>
            </div>

            <div>
                <x-card class="">
                    <header class="col-span-full">
                        <x-h3>
                            Otros servicios del {{ $service->accountType->name }}
                        </x-h3>
                    </header>
                    <div class="grid grid-cols-12 gap-2">

                        @foreach ($services as $service)
                            <a href="{{ route('services.show', ['service' => $service->ulid]) }}"
                                class="block bg-gray-100 hover:shadow col-span-6 md:col-span-6 p-2 md:p-4 rounded-xl space-x-4"
                                wire:navigate>
                                <x-card-service :service="$service" />
                            </a>
                        @endforeach
                    </div>
                </x-card>
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
