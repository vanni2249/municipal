<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use \App\Traits\AccountTypeId;

    public $filter;
    public $years = [];
    public $year;
    public $months = [];
    public $month;
    public $labels;
    public $data = [];

    public function mount()
    {
        $this->labels = $this->labels();
        $this->data = $this->data();
        $this->filter = 'year';

        $this->year = now()->year;
        $this->years = range(2026, now()->year);
    }

    public function updatedFilter($value)
    {
        $this->values();
    }

    public function values()
    {
        switch ($this->filter) {
            case 'year':
                $this->year = now()->year;
                $this->months = [];
                break;
            case 'month':
                $this->month = now()->month;

                // SET MONTHS IF IS THIS MONTH NOT MORE FOR THIS MONTH OR ALL MONTHS and show month name spanish key number and value name
                $monthNames = [
                    1 => 'Enero',
                    2 => 'Febrero',
                    3 => 'Marzo',
                    4 => 'Abril',
                    5 => 'Mayo',
                    6 => 'Junio',
                    7 => 'Julio',
                    8 => 'Agosto',
                    9 => 'Septiembre',
                    10 => 'Octubre',
                    11 => 'Noviembre',
                    12 => 'Diciembre',
                ];

                if ($this->year == now()->year) {
                    $this->months = array_slice($monthNames, 0, now()->month, true);
                    $this->month = now()->month;
                } else {
                    $this->months = $monthNames;
                    $this->month = 1;
                }
                break;
        }
    }

    public function widgets()
    {
        return [
            [
                'href' => route('admin.citizens', ['department' => request()->department()]),
                'icon' => 'users',
                'title' => 'Ciudadanos',
                'subtitle' => 'Pendientes: ' . number_format(\App\Models\Account::whereHas('status', function ($query) {
                    $query->whereHas('statusType', fn($query) => $query->whereIn('slug', ['pending']));
                })->count()),
                'value' => number_format(\App\Models\Account::count()),
                'variant' => 'info',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
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
                'href' => route('admin.users', ['department' => request()->department()]),
                'icon' => 'user',
                'title' => 'Usuarios',
                'subtitle' => 'Usuarios Activos: ' . number_format(\App\Models\User::count()),
                'value' => number_format(\App\Models\User::count()),
                'variant' => 'success',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
                        // 'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'technology-office',
                        // 'human-resources-office',
                        // 'public-works-office',
                        // 'recreation-sports-office'
                        'developer'
                    ]
                ),
            ],
            [
                'href' => route('admin.applications', ['department' => request()->department()]),
                'icon' => 'file-invoice',
                'title' => 'Aplicaciones',
                'subtitle' => 'Pendientes: ' . number_format(\App\Models\Application::whereHas('status', function ($query) {
                    $query->whereHas('statusType', fn($query) => $query->whereIn('slug', ['pending']));
                })->count()),
                'value' => number_format(\App\Models\Application::count()),
                'variant' => 'secondary',
                'show' => in_array(
                    request()->department(),
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
                'href' => route('admin.interactions', ['department' => request()->department()]),
                'icon' => 'message-2',
                'title' => 'Interacciones',
                'subtitle' => 'Interacciones abiertas: ' . number_format(\App\Models\Interaction::count()),
                'value' => number_format(\App\Models\Interaction::count()),
                'variant' => 'warning',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
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
                'href' => route('admin.inspections', ['department' => request()->department()]),
                'icon' => 'clipboard-check',
                'title' => 'Inspecciones',
                'subtitle' => 'Pendientes: ' . number_format(\App\Models\Inspection::whereHas('status', function ($query) {
                    $query->whereHas('statusType', fn($query) => $query->whereIn('slug', ['pending']));
                })->count()),
                'value' => number_format(\App\Models\Interaction::count()),
                'variant' => 'warning',
                'show' => in_array(
                    request()->department(),
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
                'href' => route('admin.routes', ['department' => request()->department()]),
                'icon' => 'route',
                'title' => 'Rutas',
                'subtitle' => 'Sin realizar: ' . number_format(\App\Models\Inspection::whereHas('status', function ($query) {
                    $query->whereHas('statusType', fn($query) => $query->whereIn('slug', ['pending']));
                })->count()),
                'value' => number_format(\App\Models\Route::count()),
                'variant' => 'warning',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
                        'finance-department',
                        // 'merchant-office',
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
                'href' => route('admin.invoices', ['department' => request()->department()]),
                'icon' => 'invoice',
                'title' => 'Facturas',
                'subtitle' => 'Total de facturas: ' . number_format(\App\Models\Invoice::count()),
                'value' => '$' . number_format(\App\Models\Invoice::sum('amount'), 2),
                'variant' => 'primary',
                'show' => in_array(
                    request()->department(),
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
                'href' => route('admin.transactions', ['department' => request()->department()]),
                'icon' => 'transaction-dollar',
                'title' => 'Transacciones',
                'subtitle' => 'Total de transacciones: ' . number_format(\App\Models\Transaction::count()),
                'value' => '$' . number_format(\App\Models\Transaction::sum('amount'), 2),
                'variant' => 'secondary',
                'show' => in_array(
                    request()->department(),
                    [
                        'mayor-office',
                        'finance-department',
                        // 'merchant-office',
                        // 'citizen-office',
                        'developer'
                    ]
                ),
            ],

            [
                // 'href' => route('admin.businesses', ['department' => request()->department()]),
                'icon' => 'building-store',
                'title' => 'Negocios',
                'subtitle' => 'Negocios activos: ' . number_format(\App\Models\Business::whereHas('status', function ($query) {
                    $query->whereHas('statusType', fn($query) => $query->whereIn('slug', ['active']));
                })->count()),
                'value' => number_format(\App\Models\Business::count()),
                'variant' => 'warning',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
                        'finance-department',
                        'merchant-office',
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
                // 'href' => route('admin.patents', ['department' => request()->department()]),
                'icon' => 'id',
                'title' => 'Patentes',
                'subtitle' => 'Patentes activas: ' . number_format(\App\Models\Patent::count()),
                'value' => number_format(\App\Models\Patent::count()),
                'variant' => 'light',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
                        'finance-department',
                        'merchant-office',
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
                // 'href' => route('admin.permits', ['department' => request()->department()]),
                'icon' => 'certificate',
                'title' => 'Permisos',
                'subtitle' => 'Permisos activos: ' . number_format(\App\Models\Permit::count()),
                'value' => number_format(\App\Models\Permit::count()),
                'variant' => 'light',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
                        'finance-department',
                        'merchant-office',
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
                // 'href' => route('admin.tasks', ['department' => request()->department()]),
                'icon' => 'list-numbers',
                'title' => 'Tareas',
                'subtitle' => 'Tareas activas: ' . number_format(\App\Models\Task::count()),
                'value' => number_format(\App\Models\Task::count()),
                'variant' => 'light',
                'show' => in_array(
                    request()->department(),
                    [
                        // 'mayor-office',
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


        ];
    }

    public function labels()
    {
        // Get days of the current month
        $days = range(1, now()->daysInMonth);
        return collect($days)->map(function ($day) {
            return now()->startOfMonth()->addDays($day - 1)->format('M d');
        })->toArray();
    }

    public function data()
    {
        $data = [];
        $days = range(1, now()->daysInMonth);
        foreach ($days as $day) {
            $count = \App\Models\Application::whereDay('created_at', $day)->count() + rand(10, 50);
            $data[] = $count;
        }
        return $data;
    }

    public function lists()
    {
        return [
            [
                'title' => 'Tipos de Cuenta',
                'total' => number_format(\App\Models\Account::count()),
                'items' => \App\Models\AccountType::withCount('accounts')->limit(5)->get()->map(function ($accountType) {
                    return [
                        'name' => $accountType->name,
                        'count' => number_format($accountType->accounts_count),
                    ];
                }),
            ],
            [
                'title' => 'Tipos de servicio',
                'total' => number_format(\App\Models\ServiceType::withCount('applications')->count()),
                'items' => \App\Models\ServiceType::withCount('applications')->limit(5)->get()->map(function ($serviceType) {
                    return [
                        'name' => $serviceType->name,
                        'count' => number_format($serviceType->applications_count),
                    ];
                }),
            ],
            [
                'title' => 'Tipos de negocio',
                'total' => number_format(\App\Models\BusinessType::withCount('businesses')->count()),
                'items' => \App\Models\BusinessType::withCount('businesses')->limit(5)->get()->map(function ($businessType) {
                    return [
                        'name' => $businessType->name,
                        'count' => number_format($businessType->businesses_count),
                    ];
                }),
            ],
            [
                'title' => 'Tipos de inspección',
                'total' => number_format(\App\Models\InspectionType::withCount('inspections')->count()),
                'items' => \App\Models\InspectionType::withCount('inspections')->limit(5)->get()->map(function ($inspectionType) {
                    return [
                        'name' => $inspectionType->name,
                        'count' => number_format($inspectionType->inspections_count),
                    ];
                }),
            ]

            // [
            //     'title' => 'Ciudadanos',
            //     'value' => number_format(\App\Models\Account::where('account_type_id', $this->getAccountTypeId('citizen'))->count()),
            // ],
            // [
            //     'title' => 'Comerciantes',
            //     'value' => number_format(\App\Models\Account::where('account_type_id', $this->getAccountTypeId('merchant'))->count()),
            // ],
        ];
    }

    public function placeholder()
    {
        return view('placeholders.views.admins.dashboard');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.dashboard.index', [
            'widgets' => $this->widgets(),
            // 'widgets' => array_slice($this->widgets(), 0, 4),
            'lists' => $this->lists(),
            // 'labels' => $this->labels(),
            // 'data' => $this->data(),
        ]);
    }
}
