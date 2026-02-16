<div class="md:flex md:justify-between space-y-2 md:space-y-0 items-center mb-2">
    <div class="">
        <x-input placeholder="Buscar" class="w-full" wire:model.live="search"/>
    </div>
    <div class="flex space-x-2">
        <div class="bg-gray-200 rounded-md p-1">
            <span class="pl-2 uppercase text-xs font-bold text-gray-600 leading-tight">Mostrar</span>
            <select class="mx-2 rounded-md text-sm" wire:model.live="perPage">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
            </select>
        </div>
        <div>
            <x-button variant="light" label="Filtro" @click="$dispatch('open-modal', 'filter-account-modal')" />
        </div>
    </div>
</div>
