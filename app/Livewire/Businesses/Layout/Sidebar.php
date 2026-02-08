<?php

namespace App\Livewire\Businesses\Layout;

use Livewire\Component;

class Sidebar extends Component
{
     public $links = [
        [
            'name' => 'Tablero',
            'route' => 'businesses.dashboard',
            'path' => 'dashboard',
        ],
        [
            'name' => 'Servicios',
            'route' => 'businesses.services',
            'path' => 'services',
        ],
        [
            'name' => 'Aplicaciones',
            'route' => 'businesses.applications',
            'path' => 'applications',
        ],
        [
            'name' => 'Permisos',
            'route' => 'businesses.permits',
            'path' => 'permits',
        ],
        [
            'name' => 'Patente',
            'route' => 'businesses.patents',
            'path' => 'patents',
        ],
        [
            'name' => 'Interacciones',
            'route' => 'businesses.interactions',
            'path' => 'interactions',
        ],
        [
            'name' => 'Configuración',
            'route' => 'businesses.settings',
            'path' => 'settings',
        ],
     ];
    public function render()
    {
        return view('livewire.businesses.layout.sidebar', [
            'links' => $this->links,
        ]);
    }
}
