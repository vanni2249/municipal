<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public $blocked_reason;

    public function mount($user)
    {
        $this->user = User::with(['type'])->findOrFail($user);
    }

    public function items()
    {
        return [
            ['label' => 'Código', 'value' => $this->user->code??'...'],
            ['label' => 'Tipo', 'value' => $this->user->register->type->es_name ?? '...'],
            ['label' => 'Nombre', 'value' => $this->user->name],
            ['label' => 'Email', 'value' => $this->user->email],
            ['label' => 'Email verificado', 'value' => $this->user->email_verified_at ? 'Si' : 'No'],
            ['label' => 'Fecha de nacimiento', 'value' => $this->user->date_of_birth ? \Carbon\Carbon::parse($this->user->date_of_birth)->format('d/m/Y') : 'No'],
            ['label' => 'Teléfono', 'value' => $this->user->register->phone??'...'],
            ['label' => 'Dirección', 'value' => $this->user->register->address ?? '...'],
            ['label' => 'Ciudad', 'value' => $this->user->register->city ?? '...'],
            ['label' => 'Código Postal', 'value' => $this->user->register->postal_code ?? '...'],
            ['label' => 'Aprobado', 'value' => $this->user->approved_at ? 'Si' : 'No'],
            ['label' => 'Fecha de Aprobación', 'value' => $this->user->approved_at ? \Carbon\Carbon::parse($this->user->approved_at)->format('d/m/Y') : 'No'],
            ['label' => 'Fecha de registro', 'value' => $this->user->created_at->format('d/m/Y')],
            ['label' => 'Ultima actualización', 'value' => $this->user->updated_at->format('d/m/Y')],
            ['label' => 'Ultima conexión', 'value' => $this->user->getLastLogin()],
            ['label' => 'Bloqueado', 'value' => $this->user->blocked_at ? 'Si' : 'No'],
            ['label' => 'Fecha de bloqueo', 'value' => $this->user->blocked_at ? \Carbon\Carbon::parse($this->user->blocked_at)->format('d/m/Y') : 'No'],
        ];
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user,
            'items' => $this->items(),
        ]);
    }
}
