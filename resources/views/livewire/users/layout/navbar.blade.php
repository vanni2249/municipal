<div>
    <div class="bg-white p-4 rounded-xl">
        <div class="flex justify-between items-center">
            <a href="{{ route('users.accounts.index') }}" class="text-xl font-bold">MyApp's</a>
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="flex items-center space-x-2 focus:outline-none cursor-pointer">
                        <x-icon icon="user-circle" />
                        {{-- <span>{{ Auth::user()->name }}</span> --}}
                        {{-- <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg> --}}
                    </button>
                </x-slot>

                <x-slot name="content">
                    {{-- <form method="POST" action="{{ route('logout') }}"> --}}
                        {{-- @csrf --}}
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    {{-- </form> --}}
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>
