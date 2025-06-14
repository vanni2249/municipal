<x-layouts.agencies>
    <div class="grid grid-cols-12 gap-4 px-4">
        <div class="col-span-full md:col-span-full">
            <x-card class="rounded-xl p-4 h-full">
               <header class="flex justify-between items-center mb-4">
                    <h1 class="text-lg font-bold">Mensaje</h1>
                </header>
                <ul class="pb-4 text-sm text-gray-600 space-y-1">
                    <li>
                        Fecha: <b>11/23/2025</b>
                    </li>
                    <li>
                        Categoria: <b>Radicacion de patente temporal</b>
                    </li>
                    <li>
                        Dirigido a: <b>Departamento de Finanzas</b>
                    </li>
                    <li>
                        Status: <b class="text-yellow-500">Pendiente</b>
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
                        <span class="text-xs text-gray-600">Respuesta:</span>
                        <p class="text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio odit provident corrupti
                            autem molestias placeat dolore nostrum, ipsum corporis quae laboriosam id ipsa qui a
                            saepe cumque asperiores quo totam.
                        </p>
                        <div class="mt-4 text-xs text-gray-600">Respondido por: <b>José Martínez</b></div>
                        <div class="text-xs text-gray-600">Departamento de finanzas</div>
                    </div>
                    <div class=" bg-gray-100 p-4 rounded-xl">
                        <span class="text-xs text-gray-600">Responder:</span>
                        <div class="">
                            <x-textarea class="md:grow w-full bg-white"/>
                            <x-button value="Enviar" class="w-full md:w-auto" />
                        </div>
                    </div>
                </div>

            </x-card>
        </div>
    </div>
</x-layouts.agencies>
