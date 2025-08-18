<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public $user;
    public $name;
    public $lastname;
    public $email;
    public $blocked;
    public $blocked_at;
    public $blocked_by;
    public $blocked_reason;
    public $approved;
    public $approved_at;
    public $approved_by;
    public $approved_status_words;
    public $admin;

    public function mount($user)
    {
        $this->user = User::findOrFail($user);
        $this->name = $this->user->register->name;
        $this->lastname = $this->user->register->lastname;
        $this->email = $this->user->email;
        if ($this->user->blocked_at)
        {
            $this->blocked = true;
            $this->blocked_at = $this->user->blocked_at;
            $this->blocked_by = $this->user->blocked_by;
            $this->blocked_reason = $this->user->blocked_reason;
        } else {
            $this->blocked = false;
            $this->blocked_at = null;
            $this->blocked_by = null;
            $this->blocked_reason = null;
        }

        if ($this->user->approved_at)
        {
            $this->approved = true;
            $this->approved_at = $this->user->approved_at;
            $this->approved_by = $this->user->approved_by;
            $this->approved_status_words = 'Aprobado';
        } else {
            $this->approved = false;
            $this->approved_at = null;
            $this->approved_by = null;
            $this->approved_status_words = 'No aprobado';
        }
        $this->admin = Auth::guard('admin')->user();
    }

    public function updated($propertyName)
    {
        if($propertyName === 'blocked')
        {
            if ($this->blocked) {
                $this->blocked_at = now();
                $this->blocked_by = $this->admin->id;
            } else {
                $this->blocked_at = null;
                $this->blocked_by = null;
            }
        }

        if($propertyName === 'approved')
        {
            if ($this->approved) {
                $this->approved_at = now();
                $this->approved_by = $this->admin->id;
                $this->approved_status_words = 'Aprobado';
            } else {
                $this->approved_at = null;
                $this->approved_by = null;
                $this->approved_status_words = 'No aprobado';
            }
        }
    }

    public function rules()
    {
        return [
            'email' => 'required|email|max:255|unique:users,email,' . $this->user->id,
            'blocked' => 'boolean',
            'blocked_reason' => 'required_if:blocked,true|nullable|string|max:255',
        ];
    }

    public function save()
    {
        $this->validate();

        $this->user->update([
            'blocked' => $this->blocked,
            'blocked_at' => $this->blocked ? $this->blocked_at : null,
            'blocked_by' => $this->blocked ? $this->blocked_by : null,
            'blocked_reason' => $this->blocked ? $this->blocked_reason : null,
            'approved_at' => $this->approved ? $this->approved_at : null,
            'approved_by' => $this->approved ? $this->approved_by : null,

        ]);

        return redirect()->route('admin.users.show', ['user' => $this->user->id])->with('success', 'Usuario actualizado correctamente.');
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.users.edit');
    }
}
