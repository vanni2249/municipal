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
