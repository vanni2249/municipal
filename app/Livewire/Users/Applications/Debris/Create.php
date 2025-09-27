<?php

namespace App\Livewire\Users\Applications\Debris;

use App\Models\DebrisType;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $user;
    public $register;
    public $name;
    public $lastname;
    public $phone;
    public $address_select;
    public $place_id;
    public $address;
    public $city;
    public $postal_code;
    public $debris_type_id;
    public $description;

    public function mount()
    {
        $this->user = Auth::user();
        $this->register = $this->user->register;
        $this->name = $this->user->register->name;
        $this->lastname = $this->user->register->lastname;
        $this->phone = $this->user->register->phone;
        $this->address_select = $this->user->register->addresses->first() ?? null;
        $this->address = $this->address_select->address;
        $this->city = $this->address_select->city;
        $this->postal_code = $this->address_select->postal_code;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'place_id' => 'required|exists:places,id',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'numeric',
            'debris_type_id' => 'required|exists:debris_types,id',
            'description' => 'nullable|string|max:1000',
        ]);

        DB::transaction(function () {
            
            $action = $this->register->actions()->create([
                'action_category_id' => 1, // Assuming 1 is the category ID for debris collection
                'description' => 'Solicitud de recogida de escombros',
                'created_by' => 'user',
            ]);
            
            $debris = $action->debris()->create([
                'place_id' => $this->place_id,
                'address' => $this->address,
                'city' => $this->city,
                'postal_code' => $this->postal_code,
                'debris_type_id' => $this->debris_type_id,
                'description' => $this->description,
            ]);
            
            session()->flash('message', 'Solicitud de recogida de escombros enviada con éxito.');
            
            return redirect()->route('users.applications.debris.show', ['debris' => $debris]);
            
        });
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.applications.debris.create', [
            'places' => Place::all(),
            'debris' => DebrisType::all(),
        ]);
    }
}
