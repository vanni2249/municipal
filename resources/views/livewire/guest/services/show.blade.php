<div class="space-y-2">
    <x-card>
        <header class="flex justify-between items-center">
            <h1 class="text-lg font-bold text-gray-900">
                {{ $service->title }}
            </h1>
        </header>
    </x-card>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-8 space-y-4">
            <div class="space-y-2">
                <x-card>
                    <div class=" flex items-center">
                        <x-icon icon="{{ $service->icon }}" height="96" width="96" class="stroke-1" />
                        <ul>
                            <li>
                                <span class=" text-xs text-gray-700 tracking-wide">
                                    {{ $service->serviceType->name }}
                                </span>
                            </li>
                            <li>
                                <span class="text-sm font-bold tracking-wide">
                                    {{ $service->description }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </x-card>
                <x-card>
                    <p class="text-sm">
                        Para solicitar este servicio, debe estar registrado en el sitio web y haber iniciado sesión. Una
                        vez
                        que haya iniciado sesión, podrá acceder a la página de solicitud del servicio y completar el
                        formulario de solicitud. Asegúrese de proporcionar toda la información requerida.
                    </p>
                    <a href="{{ route('login') }}">
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            Iniciar sesión para solicitar
                        </button>
                    </a>
                </x-card>
            </div>

            <div class="grid grid-cols-12 gap-2">
                <x-card class="col-span-full">
                    <header class="col-span-full">
                        <h1 class="text-lg font-bold text-gray-900">
                            Otros servicios del {{ $service->accountType->name }}
                        </h1>
                    </header>
                </x-card>
                @foreach ($services as $service)
                    <a href="{{ route('services.show', ['service' => $service->ulid]) }}"
                        class="block bg-white col-span-6 md:col-span-3 p-2 md:p-4 rounded-xl space-x-4" wire:navigate>
                        <div class=" flex justify-center flex-col">
                            <div class="flex-1 flex flex-col items-center">
                                <div class="">
                                    <x-icon icon="{{ $service->icon }}" height="56" width="56"
                                        class="text-gray-800 stroke-1" />

                                </div>
                                <div class="text-center">
                                    <span class="py-2 text-xs text-gray-700 tracking-wide">
                                        {{ $service->serviceType->name }}
                                    </span>
                                    <p class="text-sm font-bold text-gray-900">
                                        {{ $service->title }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-span-full lg:col-span-4 space-y-2">
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Noticias" />
                    <a href="#" class="text-sm text-blue-500 hover:underline">
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 2; $i++)
                        <x-card-body-list>
                            <span class="text-xs text-gray-700">
                                12 de Octubre de 2024
                            </span>
                            <p class="text-sm font-bold">
                                La ultima informacion sobre los eventos admonistrativos relacionados con el servicio

                            </p>
                        </x-card-body-list>
                    @endfor
                </x-card-body-lists>
            </x-card>
            <x-card>
                <header class="flex justify-between items-center">
                    <x-h3 value="Eventos" />
                    <a href="#" class="text-sm text-blue-500 hover:underline">
                        Ver todas
                    </a>
                </header>
                <x-card-body-lists>
                    @for ($i = 0; $i < 2; $i++)
                        <x-card-body-list>
                            <span class="text-xs text-gray-700">
                                12 de Octubre de 2024
                            </span>
                            <p class="text-sm font-bold">
                                Fin de semanan habra una actividad informativa sobre el servicio

                            </p>
                        </x-card-body-list>
                    @endfor
                </x-card-body-lists>
            </x-card>
        </div>
    </div>
</div>
