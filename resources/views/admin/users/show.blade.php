<x-layouts.admin>
    {{-- <div class="grid grid-cols-12 gap-4 px-4"> --}}
        {{-- <div class="col-span-full lg:col-span-full"> --}}
            @livewire('admin.users.show', ['user' => $user])
        {{-- </div> --}}
    </div>
</x-layouts.admin>