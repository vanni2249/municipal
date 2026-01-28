<div>
    <div class="bg-white mx-auto sm:w-md rounded-xl p-4">
        <div class="">
            <h1 class="text-2xl font-bold text-gray-900">Acceso</h1>
            <p class="mt-1 text-xs text-gray-600">¡Bienvenido de nuevo! Inicia sesión en tu cuenta de <b>empleado</b>.</p>
        </div>

        <form wire:submit="login">
            <div class="mt-4">
                <x-label for="username" class="mt-4" value="Username" />
                <x-input wire:model="username" class="w-full" type="text" placeholder="Enter your username" autofocus />
                @error('username')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <div class="mt-2">
                <x-label for="password" class="mt-4" value="Password" />
                <x-input wire:model="password" class="w-full" type="password" placeholder="Enter your password" />
                @error('password')
                    <x-error message="{{ $message }}" />
                @enderror
            </div>
            <a href="">
                <p class="mt-2 text-xs text-gray-600">Forgot your password?</p>
            </a>
            <div class="mt-8">
                <x-button type="submit" class="w-full" label="{{ __('Login') }}" size="lg">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
