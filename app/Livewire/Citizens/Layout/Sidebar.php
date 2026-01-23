<?php

namespace App\Livewire\Citizens\Layout;

use Livewire\Component;

class Sidebar extends Component
{
    public $links = [
        [
            'name' => 'Tablero',
            'route' => 'citizen.dashboard',
            'path' => 'dashboard',
        ],
        [
            'name' => 'Servicios',
            'route' => 'citizen.services',
            'path' => 'services',
        ],
        [
            'name' => 'Aplicaciones',
            'route' => 'citizen.applications',
            'path' => 'applications',
        ],
        [
            'name' => 'Interacciones',
            'route' => 'citizen.interactions',
            'path' => 'interactions',
        ],
        [
            'name' => 'Configuración',
            'route' => 'citizen.settings',
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
