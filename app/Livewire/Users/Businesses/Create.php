<?php

namespace App\Livewire\Users\Businesses;

use App\Livewire\Forms\User\BusinessForm;
use App\Models\BusinessCategory;
use App\Models\BusinessType;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public BusinessForm $form;

    public function mount()
    {
        $this->form->user = Auth::user();
    }

    public function save()
    {
        $this->validate();

        $this->form->store();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.businesses.create',[
            'business_types' => BusinessType::all(),
            'business_categories' => BusinessCategory::all(),
            'places' => Place::all(),
        ]);
    }
}
