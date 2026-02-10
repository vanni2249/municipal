<?php

namespace App\Livewire\Businesses\Patents;

use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public $business;

    public function mount()
    {
        $this->business = Business::where('ulid', session('data.business_ulid'))->with('patents')->first();
    }

    public function placeholder()
    {
        return view('placeholders.views.businesses.patent-index');
    }
    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.patents.index',[
            'patents' => $this->business->patents()->with('period')->paginate(15),
        ]);
    }
}
