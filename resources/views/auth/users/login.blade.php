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
        <div class="">
            <h1 class="text-2xl font-bold text-gray-900">Acceso</h1>
            <p class="mt-1 text-xs text-gray-600">¡Bienvenido! Inicia sesión en tu cuenta de <b>{{ $roleLabel }}</b>.</p>
        </div>
        @livewire('auth.users.login')
        <div class="mt-6">
            <p class="mt-4 text-xs text-gray-600">
                ¿No tienes una cuenta? 
            </p>
                <a href="{{ route('users.register', ['role' => request()->segment(3)]) }}"
                    class="text-blue-500 hover:text-blue-700 text-xs">Regístrar una cuenta de {{ $roleLabel }}</a>
        </div>
    </div>
</x-layouts.auth>