<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 p-4">
        <header class="col-span-full flex items-center justify-between">
            <x-title title="Llamada" />
            <div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <x-button size="sm" class="flex items-center space-x-2">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
                        </x-button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="#">Accion 1</x-dropdown-link>
                        <x-dropdown-link href="#">Accion 2</x-dropdown-link>
                        <x-dropdown-link href="#">Accion 3</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
        <div class="col-span-full md:col-span-full">
            <x-card class="rounded p-4 h-full">
                <header
                    class="flex flex-col md:flex-row md:justify-between md:items-center space-y-4 md:space-y-0 ">
                    <h2 class="text-sm font-bold text-gray-800">
                        Llamada
                    </h2>
                </header>
                <ul class="py-4 text-sm text-gray-600 space-y-1">
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
    </div>
</x-layouts.agencies>
