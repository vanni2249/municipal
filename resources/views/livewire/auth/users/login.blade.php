<div>
    <div class="mx-auto bg-gray-100 rounded-xl overflow-hidden md:max-w-md">
        <div class="bg-white w-full md:w-md rounded-xl p-4">
            <div class="">
                <h1 class="text-2xl font-bold text-gray-900">Acceso</h1>
                <p class="mt-1 text-xs text-gray-600">¡Bienvenido! Inicia sesión en tu cuenta</b>.
                </p>
            </div>
            <form wire:submit="login">
                <div class="mt-4">
                    <x-label for="email" class="mt-4" value="Email" />
                    <x-input wire:model="email" class="w-full" type="email" placeholder="Enter your email" autofocus />
                    @error('email')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <div class="mt-2">
                    <x-label for="email" class="mt-4" value="Password" />
                    <x-input wire:model="password" class="w-full" type="password" placeholder="Enter your password" />
                    @error('password')
                        <x-error message="{{ $message }}" />
                    @enderror
                </div>
                <a href="">
                    <p class="mt-2 text-xs text-gray-600">Forgot your password?</p>
                </a>
                <div class="mt-8">
                    <x-button type="submit" class="w-full">
                        {{ __('Login') }}
                    </x-button>
                </div>
            </form>
            <div class="mt-6">
                <p class="mt-4 text-xs text-gray-600">
                    ¿No tienes una cuenta?
                </p>
                <a href="{{ route('users.register') }}" class="text-blue-500 hover:text-blue-700 text-xs">Registrar una
                    cuenta</a>
            </div>
        </div>
    </div>
</div>
