<?php

namespace App\Livewire\Users\Businesses;

use App\Models\Account;
use App\Models\Business;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use \App\Traits\AccountTypeId;

    public $merchantAccount;

    public function mount()
    {
        sleep(1);
        $this->merchantAccount = Account::where('user_id', Auth::id())
            ->where('account_type_id', $this->getAccountTypeId('merchant'))
            ->first();

            // dd(Auth::id(), $this->merchantAccount);
    }

    public function placeholder()
    {
        return view('placeholders.views.users.business-index-skeleton');
    }
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.businesses.index', [
            'businesses' => Business::where('account_id', $this->merchantAccount->id)->paginate(10) ?? [],
        ]);
    }
}
