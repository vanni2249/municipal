<?php

namespace App\Livewire\Admin\Visitors;

use App\Models\Visitor;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $visitor;

    public function mount($visitor)
    {
        $this->visitor = Visitor::findOrFail($visitor);
    }

    public function items()
    {
        return [
            ['label' => 'Nombre', 'value' => $this->visitor->name??'...'],
            ['label' => 'Email', 'value' => $this->visitor->email??'...'],
            ['label' => 'Telefono', 'value' => $this->visitor->phone??'...'],
            ['label' => 'Direccion', 'value' => $this->visitor->address??'...'],
            ['label' => 'Ciudada', 'value' => $this->visitor->city??'...'],
            ['label' => 'Fecha de creacion', 'value' => $this->visitor->created_at->format('d/m/Y'),],
        ];
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.visitors.show', [
            'items' => $this->items()
        ]);
    }
}
