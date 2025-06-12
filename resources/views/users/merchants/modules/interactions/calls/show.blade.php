<x-layouts.merchants>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header
                        class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 ">
                        <h2 class="text-sm font-bold text-gray-800">
                            Llamada
                        </h2>
                    </header>
                    <ul class="py-4 text-xs text-gray-600 space-y-1">
                        <li>
                            Fecha: <b>11/23/2025</b>
                        </li>
                        <li>
                            Numero de telefono: <b>(787) 555-1234</b>
                        </li>
                        <li>
                            Categoria: <b>Radicacion de patente temporal</b>
                        </li>
                        <li>
                            Status: <b class="text-green-600">Completada</b>
                        </li>
                    </ul>
                    <div class="space-y-2">
                        <div class="bg-gray-100 p-4 rounded-xl">
                            <span class="text-xs text-gray-600">Inquietud:</span>
                            <p class="text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio odit provident corrupti
                                autem molestias placeat dolore nostrum, ipsum corporis quae laboriosam id ipsa qui a
                                saepe cumque asperiores quo totam.
                            </p>
                            <div class="mt-4 text-xs text-gray-600">Por: <b>Juan Pérez</b></div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-xl">
                            <span class="text-xs text-gray-600">Observación:</span>
                            <p class="text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio odit provident corrupti
                                autem molestias placeat dolore nostrum, ipsum corporis quae laboriosam id ipsa qui a
                                saepe cumque asperiores quo totam.
                            </p>
                            <div class="mt-4 text-xs text-gray-600">Respondido por: <b>José Martínez</b></div>
                            <div class="text-xs text-gray-600">Departamento de finanzas</div>
                        </div>
                    </div>

                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
                @include('users.merchants.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.merchants>