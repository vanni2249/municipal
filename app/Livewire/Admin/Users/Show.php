<?php

namespace App\Livewire\Admin\Users;

use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public $blocked_reason;

    public function mount($user)
    {
        $this->user = $user->load('category');
    }

    public function items()
    {
        return [
            ['label' => 'Codigo', 'value' => $this->user->id],
            ['label' => 'Categoria', 'value' => $this->user->category->es_name ?? 'No'],
            ['label' => 'Nombre', 'value' => $this->user->name],
            ['label' => 'Email', 'value' => $this->user->email],
            ['label' => 'Email verificado', 'value' => $this->user->email_verified_at ? 'Si' : 'No'],
            ['label' => 'Fecha de nacimiento', 'value' => $this->user->date_of_birth ? \Carbon\Carbon::parse($this->user->date_of_birth)->format('d/m/Y') : 'No'],
            ['label' => 'Telefono', 'value' => $this->user->phone],
            ['label' => 'Nombre de compania', 'value' => $this->user->company_name ?? 'No'],
            ['label' => 'Numero de comerciante', 'value' => $this->user->number ?? 'No'],
            ['label' => 'Direccion', 'value' => $this->user->address ?? 'No'],
            ['label' => 'Ciudad', 'value' => $this->user->city ?? 'No'],
            ['label' => 'Codigo Postal', 'value' => $this->user->postal_code ?? 'No'],
            ['label' => 'Aprovado', 'value' => $this->user->approved_at ? 'Si' : 'No'],
            ['label' => 'Fecha de Aprobacion', 'value' => $this->user->approved_at ? \Carbon\Carbon::parse($this->user->approved_at)->format('d/m/Y') : 'No'],
            ['label' => 'Fecha de registro', 'value' => $this->user->created_at->format('d/m/Y')],
            ['label' => 'Ultima actualizacion', 'value' => $this->user->updated_at->format('d/m/Y')],
            ['label' => 'Ultima conexion', 'value' => $this->user->getLastLogin()],
            ['label' => 'Bloqueado', 'value' => $this->user->blocked_at ? 'Si' : 'No'],
            ['label' => 'Fecha de bloqueo', 'value' => $this->user->blocked_at ? \Carbon\Carbon::parse($this->user->blocked_at)->format('d/m/Y') : 'No'],
        ];
    }

    public function approveUser()
    {
        $this->user->update(['approved_at' => now()]);
        $this->dispatch('close-modal', 'approve-user-modal');
    }

    public function disapproveUser()
    {
        $this->user->update(['approved_at' => null]);
        $this->dispatch('close-modal', 'approve-user-modal');
    }

    public function blockUser()
    {
        $this->validate([
            'blocked_reason' => 'required|string|max:255',
        ]);
        $this->user->update(['blocked_at' => now(), 'blocked_reason' => $this->blocked_reason, 'blocked_by' => auth()->guard('admin')->user()->id]);
        $this->dispatch('close-modal', 'block-user-modal');
    }

    public function unblockUser()
    {
        $this->user->update(['blocked_at' => null, 'blocked_reason' => null, 'blocked_by' => null]);
        $this->dispatch('close-modal', 'block-user-modal');
    }

    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user,
            'items' => $this->items(),
        ]);
    }
}
