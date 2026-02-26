<?php

namespace App\Livewire\Users\Accounts;

use App\Models\Account;
use App\Traits\AccountNumber;
use App\Traits\AccountTypeId;
use App\Traits\AccountUlid;
use App\Traits\BusinessNumber;
use App\Traits\BusinessUlid;
use App\Traits\StatusId;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use AccountUlid, AccountNumber, AccountTypeId, BusinessUlid, BusinessNumber, StatusId;
    public $user;
    public $merchant_account_number;
    public $merchant_account_code;
    public $business_type_id;
    public $business_name;
    public $business_address;
    public $business_place_id;
    public $business_postal_code;

    public function mount()
    {
        $this->user = auth()->user();
    }

   

   
    public function placeholder()
    {
        return view('placeholders.views.users.account-index');
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.index', [
            'accounts' => auth()->user()->accounts()
                ->with(['accountType', 'businesses', 'businesses.status', 'businesses.status.statusType', 'status.statusType'])
                ->whereIn('account_type_id', [1, 2])
                ->orderBy('account_type_id', 'asc')
                ->get() ?? [],
            'merchant_account' => $this->user->accounts()->where('account_type_id', 2)->first() ?? null,
            'businesses' => $this->user->accounts()->where('account_type_id', 2)->with('businesses')->get()->pluck('businesses')->flatten() ?? [],
            'business_types' => \App\Models\BusinessType::all() ?? [],
            'places' => \App\Models\Place::all() ?? [],
        ]);
    }
}
