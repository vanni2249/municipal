<x-layouts.auth>
    <div class="bg-white w-full sm:w-sm rounded p-4">
        <div class="">
            <h1 class="text-2xl font-bold text-gray-900">Acceso</h1>
            <p class="mt-1 text-sm text-gray-600">¡Bienvenido de nuevo! Inicia sesión en tu cuenta de <b>contador</b>.</p>
        </div>
        <div class="mt-4">
            <x-label for="email" class="mt-4" value="Email" />
            <x-input id="email" class="w-full" type="email" name="email" placeholder="Enter your email" required
                autofocus />
        </div>
        <div class="mt-2">
            <x-label for="email" class="mt-4" value="Password" />
            <x-input id="email" class="w-full" type="email" name="email" placeholder="Enter your email" required
                autofocus />
            {{--
            <x-error for="email" class="mt-2" value="Email is required" /> --}}
        </div>
        <a href="">
            <p class="mt-2 text-xs text-gray-600">Forgot your password?</p>
        </a>
        <div class="mt-8">
            <x-button class="w-full">
                {{ __('Login') }}
            </x-button>
        </div>
        <div class="mt-6">
            <p class="mt-4 text-xs text-gray-600">
                ¿No tienes una cuenta? 
            </p>
                <a href="{{ route('accountants.register') }}"
                    class="text-blue-500 hover:text-blue-700 text-xs">Regístrar una cuenta de contador</a>
        </div>
    </div>
</x-layouts.auth>