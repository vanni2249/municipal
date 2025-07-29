<x-layouts.auth>
    @php
    $role = request()->segment(3);
    switch ($role) {
        case 'citizen':
            $roleLabel = 'ciudadano';
        break;
        case 'merchant':
            $roleLabel = 'comerciante';
        break;
        case 'accountant':
            $roleLabel = 'contador';
        break;
        case 'contractor':
            $roleLabel = 'contratista';
        break;
        case 'supplier':
            $roleLabel = 'suplidor';
        break;
        case 'visitor':
            $roleLabel = 'visitante';
        break;
        default:
            $roleLabel = 'usuario';
        break;
    }
    @endphp
    <div class="bg-white w-full sm:w-sm rounded-xl p-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Registrar</h1>
            <p class="mt-1 text-sm text-gray-600">¡Bienvenido! Registro de <b>{{ $roleLabel }}</b> de la
                ciudad de San Antonio.</p>
        </div>
        @livewire('auth.users.register', ['role' => $role])
        <div class="mt-6">
                <p class="mt-4 text-xs text-gray-600">¿Ya tienes una cuenta? <a
                        href="{{ route('users.login', ['role' => request()->segment(3)]) }}"
                        class="text-blue-500">Inicia sesión</a></p>
            </div>
    </div>
</x-layouts.auth>