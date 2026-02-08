<?php

namespace App\Livewire\Businesses\Applications\AppBusinessTemporaryPatent;

use App\Models\AppBusinessTemporaryPatent;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\InspectionNumber;
use App\Traits\InspectionTypeId;
use App\Traits\InspectionUlid;
use App\Traits\InvoiceNumber;
use App\Traits\InvoiceUlid;
use App\Traits\StatusTypeId;
use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid, 
        ApplicationNumber, 
        StatusTypeId, 
        InspectionNumber, 
        InspectionUlid, 
        InvoiceNumber,
        InvoiceUlid,
        InspectionTypeId;

    public $service;
    public $business;
    public $start_date;
    public $amount;


    public function mount($service, $business)
    {
        $this->service = $service;
        $this->business = $business;
    }

    public function store()
    {
        $this->validate([
            'start_date' => 'required|date',
            'amount' => 'required|numeric',
        ]);

        $appBusinessTemporaryPatent = AppBusinessTemporaryPatent::create([
            'started_at' => $this->start_date,
            'ended_at' => Carbon::parse($this->start_date)->addDays(30),
            'amount' => $this->amount,
        ]);

        $app = $appBusinessTemporaryPatent->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => $this->business->id,
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $app->invoice()->create([
            'ulid' => $this->createInvoiceUlid(),
            'number' => $this->createInvoiceNumber(),
            'amount' => $this->amount,
        ]);

        // Logic to store the application goes here

        session()->flash('message', 'Application submitted successfully.');

        return $this->redirect(route('businesses.applications.show', $app->ulid), navigate: true);


    }
    public function render()
    {
        return view('livewire.businesses.applications.app-business-temporary-patent.create');
    }
}
