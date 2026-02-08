<?php

namespace App\Livewire\Citizens\Applications\AppCitizenResidencialConstructionPermit;

use App\Models\AppCitizenResidencialConstructionPermit;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\InvoiceNumber;
use App\Traits\InvoiceUlid;
use App\Traits\StatusTypeId;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid,
        ApplicationNumber,
        StatusTypeId,
        InvoiceUlid,
        InvoiceNumber;
    public $service;

    public $account;

    public $owner_name;

    public $address_id;

    public $description;

    public $contractor_name;

    public function mount($service, $account)
    {
        $this->service = $service;
        $this->account = $account;
    }

    public function store()
    {
        $this->validate([
            'address_id' => 'required|exists:addresses,id',
            'description' => 'required|string|min:10|max:1000',
            'owner_name' => 'required|string|max:255',
            'contractor_name' => 'required|string|max:255',
        ]);


        DB::transaction(function () {
            $appCitizenResidencialConstructionPermit = AppCitizenResidencialConstructionPermit::create([
                'address_id' => $this->address_id,
                'description' => $this->description,
                'owner_name' => $this->owner_name,
                'contractor_name' => $this->contractor_name,
            ]);

            $app = $appCitizenResidencialConstructionPermit->applications()->create([
                'ulid' => $this->createApplicationUlid(),
                'number' => $this->createApplicationNumber(),
                'account_id' => $this->account->id,
                'service_id' => $this->service->id,
            ]);

            $app->statuses()->create([
                'status_type_id' => $this->getStatusTypeId('pending'),
            ]);

            $app->invoice()->create([
                'ulid' => $this->createInvoiceUlid(),
                'number' => $this->createInvoiceNumber(),
                'amount' => $this->service->amount, // Example amount, replace with actual logic
            ]);

            session()->flash('message', 'Application submitted successfully.');
    
            return $this->redirect(route('citizens.applications.show', $app->ulid), navigate: true);
        });

        // Logic to store the application goes here

    }

    public function render()
    {
        return view('livewire.citizens.applications.app-citizen-residencial-construction-permit.create', [
            'addresses' => Auth::user()->accounts->where('ulid', session('data.account_ulid'))->first()->addresses()->get(),
        ]);
    }
}
