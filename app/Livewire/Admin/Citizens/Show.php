<?php

namespace App\Livewire\Admin\Citizens;

use App\Models\Citizen;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $citizen;

    public function mount($citizen)
    {
        $this->citizen = Citizen::findOrFail($citizen);
    }

    public function items()
    {
        return [
            ['label' => 'Nombre', 'value' => $this->citizen->name,],
            ['label' => 'Email', 'value' => $this->citizen->email,],
            ['label' => 'Telefono', 'value' => $this->citizen->phone,],
            ['label' => 'Direccion', 'value' => $this->citizen->address,],
            ['label' => 'Lugar', 'value' => $this->citizen->place ? $this->citizen->place->name : 'N/A',],
            ['label' => 'Fecha de creacion', 'value' => $this->citizen->created_at->format('d/m/Y'),],
        ];
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.citizens.show', [
            'items' => $this->items()
        ]);
    }
}
