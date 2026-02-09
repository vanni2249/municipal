<?php

namespace App\Livewire\Components;

use App\Traits\PermitNumber;
use App\Traits\PermitUlid;
use App\Traits\StatusTypeId;
use App\Traits\TransactionNumber;
use App\Traits\TransactionUlid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CitizenApplicationPayment extends Component
{
    use TransactionUlid, TransactionNumber, PermitUlid, PermitNumber, StatusTypeId;

    public $application;

    public function mount($application)
    {
        $this->application = $application;
    }

    public function makePayment()
    {

        DB::transaction(function () {
            // Create a transaction for the invoice
            $this->application->invoice->transactions()->create([
                'ulid' => $this->createTransactionUlid(),
                'number' => $this->createTransactionNumber(),
                'status' => 'success',
                'amount' => $this->application->invoice->amount,
                'transaction_method_type_id' => 7, // Assuming 7 is the ID for the default payment method
                'reference' => 'Pago de factura para la aplicación: ' . $this->application->number,
            ]);

            if ($this->application->invoice->amount <= $this->application->invoice->transactions()->where('status', 'success')->sum('amount')) {
                $this->application->account->permits()->create([
                    'ulid' => $this->createPermitUlid(),
                    'number' => $this->createPermitNumber(),
                    'application_id' => $this->application->id,
                ]);

                $this->application->statuses()->create([
                    'status_type_id' => $this->getStatusTypeId('completed'), // Assuming 3 is the ID for "approved" status
                    'changed_by' => Auth::id(),
                ]);
                $this->dispatch('close-modal', 'make-payment-modal');

                return $this->redirect(route('citizens.applications.show', $this->application->ulid), navigate: true);
            }
        });
        session()->flash('error', 'El pago no se ha completado. Por favor, intente nuevamente.');
        $this->dispatch('close-modal', 'make-payment-modal');
        return $this->redirect(route('citizens.applications.show', $this->application->ulid), navigate: true);
    }

    public function render()
    {
        return view('livewire.components.citizen-application-payment');
    }
}
