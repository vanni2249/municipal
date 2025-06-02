<div>
   <div class="space-y-2">
        @for ($i = 0; $i < 2; $i++) 
        <a href="{{ route('users.settlements.show' , ['settlement' => $i]) }}" class="bg-gray-100 hover:bg-gray-200 flex w-full p-4 rounded-xl">
            <div class="flex w-full justify-between items-start">
                <div class="grow p-2">
                    <ul class="text-sm">
                        <li class="text-gray-800 text-md font-bold ">Radicacion de permiso de contruccion</li>
                        {{-- <li class="text-gray-800 text-xs">Viernes 12 de enero de 2025</li> --}}
                        <li class="text-gray-600 text-xs mt-4">
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
                </div>
                <div class="">
                    <span class="text-xs text-gray-600">hace 12 horas</span>
                </div>
            </div>
        </a>
        @endfor
    </div>
</div>
