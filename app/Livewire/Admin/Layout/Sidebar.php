<?php

namespace App\Livewire\Admin\Layout;

use Livewire\Component;

class Sidebar extends Component
{
    public $links = [
        [
            'name' => 'Tablero',
            'route' => 'admin.dashboard',
            'path' => 'dashboard',
        ],
        [
            'name' => 'Usuarios',
            'route' => 'admin.users',
            'path' => 'users',
        ],
        [
            'name' => 'Administradores',
            'route' => 'admin.administrators',
            'path' => 'administrators',
        ],
        [
            'name' => 'Cuentas',
            'route' => 'admin.accounts',
            'path' => 'accounts',
        ],
        [
            'name' => 'Servicios',
            'route' => 'admin.services',
            'path' => 'services',
        ],
        [
            'name' => 'Aplicaciones',
            'route' => 'admin.applications',
            'path' => 'applications',
        ],
        [
            'name' => 'Interacciones',
            'route' => 'admin.interactions',
            'path' => 'interactions',
        ],
        [
            'name' => 'Inspecciones',
            'route' => 'admin.inspections',
            'path' => 'inspections',
        ],
        [
            'name' => 'Rutas',
            'route' => 'admin.routes',
            'path' => 'routes',
        ],
        [
            'name' => 'Facturas',
            'route' => 'admin.invoices',
            'path' => 'invoices',
        ],
        [
            'name' => 'Transacciones',
            'route' => 'admin.transactions',
            'path' => 'transactions',
        ],
        [
            'name' => 'Registros',
            'route' => 'admin.logs',
            'path' => 'logs',
        ],
        [
            'name' => 'Listas',
            'route' => 'admin.lists',
            'path' => 'lists',
        ],
        [
            'name' => 'Configuración',
            'route' => 'admin.settings',
            'path' => 'settings',
        ],
    ];
    public function render()
    {
        return view('livewire.admin.layout.sidebar', [
            'links' => $this->links,
        ]);
    }
}
