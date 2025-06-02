<x-layouts.auth>
    <div class="bg-white w-full sm:w-sm rounded p-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Registrar</h1>
            <p class="mt-1 text-sm text-gray-600">¡Bienvenido! Registro de <b>contratista</b> de la
                ciudad de San Antonio.</p>
        </div>
        <div class="mt-4">
            <x-label for="text" class="mt-4" value="Nombre" />
            <x-input id="name" class="w-full" type="text" name="name" placeholder="Ingrese su nombre" required
                autofocus />
        </div>
        <div class="mt-2">
            <x-label for="email" class="mt-4" value="Correo electronico" />
            <x-input id="email" class="w-full" type="email" name="email" placeholder="Ingrese su correo electronico"
                required />
        </div>
        <div class="mt-2">
            <x-label for="password" class="mt-4" value="Contraseña" />
            <x-input id="password" class="w-full" type="password" name="password" placeholder="Ingrese su contraseña"
                required />
        </div>
        <div class="mt-2">
            <x-label for="password_confirmation" class="mt-4" value="Confirmar contraseña" />
            <x-input id="password_confirmation" class="w-full" type="password" name="password_confirmation"
                placeholder="Confirme su contraseña" required />
        </div>
        <div class="mt-2">
            <x-label for="phone" class="mt-4" value="Teléfono" />
            <x-input id="phone" class="w-full" type="text" name="phone" placeholder="Ingrese su teléfono" required />
        </div>
        <div class="mt-2 flex items-center space-x-2">
            <div class="pt-1">
                <x-checkbox id="terms" name="terms" value="1" />
            </div>
            <a href="#">
                <x-label for="terms" value="Acepto los términos y condiciones" />
            </a>
        </div>
        <div class="mt-8">
            <x-button class="w-full">
                {{ __('Registrar') }}
            </x-button>
        </div>
        <div class="mt-6">
            <p class="mt-4 text-xs text-gray-600">¿Ya tienes una cuenta? <a href="{{ route('contractors.login') }}"
                    class="text-blue-500">Inicia sesión</a></p>
        </div>
    </div>
</x-layouts.auth>