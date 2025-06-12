<x-layouts.users>
    <div class="max-w-7xl mx-auto p-4 space-y-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-full md:col-span-8">
                <x-card class="rounded-xl p-4 h-full">
                    <header
                        class="flex flex-row justify-between items-center space-x-4 mb-4">
                        <h2 class="text-lg font-bold text-gray-900">
                            Notificaciones
                        </h2>
                    </header>
                    <div class="col-span-full space-y-2">
                        @for ($i = 0; $i < 3; $i++) 
                        <a href="#" class="bg-gray-100 hover:bg-gray-200 block w-full p-2 md:p-4 rounded-xl">
                            <header class="flex justify-between items-center">
                                <small class=" text-gray-600">
                                    Mensaje respondido
                                </small>
                                <small>
                                    hace {{ rand(1,12) }} horas
                                </small>
                            </header>
                                <ul class="text-sm py-2">
                                    <li class="text-gray-800 text-md font-bold ">
                                        Se ha respondido a tu mensaje de solicitud de patente oficial
                                    </li>
                                    <li class="text-xs text-gray-600 line-clamp-2">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium iusto minus id laborum, cum temporibus consequuntur consectetur quia repellendus? Neque magnam praesentium blanditiis, culpa animi architecto exercitationem in eum rem.
                                    </li>
                                </ul>
                        </a>
                        @endfor
                    </div>
                </x-card>
            </div>
            <div class="col-span-full md:col-span-4">
                 @include('users.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>