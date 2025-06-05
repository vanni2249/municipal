<div>
    <div class="space-y-2">
        <a href="{{ route('citizens.registers.show' , ['register' => 1]) }}" class="bg-gray-100 hover:bg-gray-200 flex w-full p-4 rounded-xl">
            <div class="flex w-full justify-between items-start">
                <div class="grow p-2">
                    <ul class="text-sm">
                        <li class="text-gray-800 text-xs">Persona con impedimento</li>
                        <li class="text-gray-800 text-md font-bold ">
                            Jose Perez Gomez
                        </li>
                        <li class="text-gray-600 text-xs mt-4">
                            <x-badge color="yellow">En proseso de evaluacion</x-badge>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <span class="text-xs text-gray-600">hace 12 horas</span>
                </div>
            </div>
        </a>
        <a href="{{ route('citizens.registers.show' , ['register' => 1]) }}" class="bg-gray-100 hover:bg-gray-200 flex w-full p-4 rounded-xl">
            <div class="flex w-full justify-between items-start">
                <div class="grow p-2">
                    <ul class="text-sm">
                        <li class="text-gray-800 text-xs">Persona de edad avanzada</li>
                        <li class="text-gray-800 text-md font-bold ">
                            Luis Alberto Garcia
                        </li>
                        <li class="text-gray-600 text-xs mt-4">
                            <x-badge color="green">Prosesado</x-badge>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <span class="text-xs text-gray-600">hace 12 horas</span>
                </div>
            </div>
        </a>
    </div>
</div>
