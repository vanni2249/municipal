<?php

namespace App\Livewire\Citizens\Layout;

use Livewire\Component;

class Sidebar extends Component
{
    public $links = [
        [
            'name' => 'Tablero',
            'route' => 'citizens.dashboard',
            'path' => 'dashboard',
        ],
        [
            'name' => 'Servicios',
            'route' => 'citizens.services',
            'path' => 'services',
        ],
        [
            'name' => 'Aplicaciones',
            'route' => 'citizens.applications',
            'path' => 'applications',
        ],
        [
            'name' => 'Permisos',
            'route' => 'citizens.permits',
            'path' => 'permits',
        ],
        [
            'name' => 'Interacciones',
            'route' => 'citizens.interactions',
            'path' => 'interactions',
        ],
        [
            'name' => 'Configuración',
            'route' => 'citizens.settings',
            'path' => 'settings',
        ],
    ];
    public function render()
    {
        return view('livewire.citizens.layout.sidebar', [
            'links' => $this->links,
        ]);
    }
}
