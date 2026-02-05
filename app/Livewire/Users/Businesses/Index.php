<?php

namespace App\Livewire\Users\Businesses;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use \App\Traits\AccountTypeId;

    public function mount()
    {
        sleep(1);
    }

    public function placeholder()
    {
        return view('placeholders.views.users.business-index-skeleton');
    }
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.businesses.index', [
            'businesses' => auth()
                ->user()
                ->accounts()
                ->where('account_type_id', $this->getAccountTypeId('merchant'))
                ->first()
                ->businesses()
                ->paginate(10),
        ]);
    }
}
