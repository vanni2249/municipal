<div>
    <div class="space-y-2">
        @for ($i = 0; $i < 5; $i++) 
        <a href="{{ route('users.applications.show' , ['application' => $i]) }}"
            class="bg-gray-100 hover:bg-gray-200 flex w-full p-4 rounded-xl">
            <div class="flex w-full justify-between items-start">
                <div class="grow flex items-center space-x-4 p-2">
                    @if (in_array($i, [ 1, 4]))
                    <ul class="text-sm">
                        <li class="text-xs text-gray-500">Recreacion y deportes</li>
                        <li class="text-gray-800 text-md font-bold ">
                            Solicitud de uso parque Comverse 2
                        </li>
                        <li class="text-gray-600 text-xs mt-2">
                            @if (in_array($i, [1]))
                            <x-badge color="yellow">
                                Proseso de evaluacion
                                    
                            </x-badge>
                            @else
                            <x-badge color="green">
                                Aprovado
                                    
                            </x-badge>
                            @endif
                        </li>
                    </ul>

                    @else

                    <ul class="text-sm">
                        <li class="text-xs text-gray-500">Obras publicas</li>
                        <li class="text-gray-800 text-md font-bold ">Solicitud de servicio de recogido de vegetacion
                        </li>
                        <li class="text-gray-600 text-xs mt-2">
                            @if (in_array($i, [0]))
                            <x-badge color="yellow">
                                Proseso de evaluacion
                                    
                            </x-badge>
                            @else
                            <x-badge color="green">
                                Aprovado
                                    
                            </x-badge>
                            @endif
                        </li>
                    </ul>
                    @endif
                </div>
                <div class="">
                    <span class="text-xs text-gray-600">hace {{ rand(2,100) }} dias</span>
                </div>
            </div>
        </a>
        @endfor
    </div>
</div>