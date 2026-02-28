<?php

namespace App\Livewire\Admin\Layout;

use Livewire\Component;

class Sidebar extends Component
{
    public $segments = [];
    public $links = [];

    public function mount()
    {
        $this->segments = request()->segments();

        // dd($this->segments[1]);

        $this->links = [
            [
                'icon' => 'layout-dashboard',
                'name' => 'Tablero',
                'route' => route('admin.dashboard', ['department' => $this->segments[1]]),
                'path' => 'dashboard',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        'merchant-office',
                        'citizen-office',
                        'technology-office',
                        'human-resources-office',
                        'public-works-office',
                        'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'id-badge-2',
                'name' => 'Empleados',
                'route' => route('admin.employees', ['department' => $this->segments[1]]),
                'path' => 'employees',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        // 'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'device-desktop',
                'name' => 'Administradores',
                'route' => route('admin.administrators', ['department' => $this->segments[1]]),
                'path' => 'administrators',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        // 'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'user-check',
                'name' => 'Cuentas',
                'route' => route('admin.accounts', ['department' => $this->segments[1]]),
                'path' => 'accounts',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        'merchant-office',
                        'citizen-office',
                        'technology-office',
                        'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'user',
                'name' => 'Usuarios',
                'route' => route('admin.users', ['department' => $this->segments[1]]),
                'path' => 'users',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        // 'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'layout-grid',
                'name' => 'Servicios',
                'route' => route('admin.services', ['department' => $this->segments[1]]),
                'path' => 'services',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        'merchant-office',
                        'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        'public-works-office',
                        'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'file-invoice',
                'name' => 'Aplicaciones',
                'route' => route('admin.applications', ['department' => $this->segments[1]]),
                'path' => 'applications',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        'merchant-office',
                        'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        'public-works-office',
                        'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'message-2',
                'name' => 'Interacciones',
                'route' => route('admin.interactions', ['department' => $this->segments[1]]),
                'path' => 'interactions',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        'merchant-office',
                        'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        'public-works-office',
                        'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'clipboard-check',
                'name' => 'Inspecciones',
                'route' => route('admin.inspections', ['department' => $this->segments[1]]),
                'path' => 'inspections',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        'merchant-office',
                        'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        'public-works-office',
                        'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'route',
                'name' => 'Rutas',
                'route' => route('admin.routes', ['department' => $this->segments[1]]),
                'path' => 'routes',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        'merchant-office',
                        'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        'public-works-office',
                        'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'invoice',
                'name' => 'Facturas',
                'route' => route('admin.invoices', ['department' => $this->segments[1]]),
                'path' => 'invoices',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'transaction-dollar',
                'name' => 'Transacciones',
                'route' => route('admin.transactions', ['department' => $this->segments[1]]),
                'path' => 'transactions',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'clipboard-data',
                'name' => 'Registros',
                'route' => route('admin.logs', ['department' => $this->segments[1]]),
                'path' => 'logs',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        // 'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'list-details',
                'name' => 'Listas',
                'route' => route('admin.lists', ['department' => $this->segments[1]]),
                'path' => 'lists',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        // 'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
            [
                'icon' => 'settings',
                'name' => 'Configuración',
                'route' => route('admin.settings', ['department' => $this->segments[1]]),
                'path' => 'settings',
                'show' => in_array(
                    $this->segments[1],
                    [
                        'mayor-office',
                        // 'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office',
                        'developer'
                    ]
                ),
            ],
        ];
    }

    public function render()
    {
        return view('livewire.admin.layout.sidebar', [
            'links' => $this->links,
        ]);
    }
}
