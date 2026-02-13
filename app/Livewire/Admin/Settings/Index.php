<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = $this->settings();

    }

    public function settings()
    {
        return [
            [
                'name' => 'Departamentos',
                'descriptions' => 'Crear, editar y eliminar departamentos. Los departamentos son las áreas o divisiones dentro de la municipalidad.',
            ],
            [
                'name' => 'Stripes',
                'descriptions' => 'Configurar las opciones de Stripe, plataforma de pagos en línea. Aquí puedes ajustar las opciones relacionadas con los pagos.',
            ]
        ];
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.settings.index');
    }
}
