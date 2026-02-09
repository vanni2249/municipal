<?php

namespace App\Livewire\Citizens\Applications;

use App\Models\Application;
use App\Traits\InteractionNumber;
use App\Traits\InteractionUlid;
use App\Traits\PermitNumber;
use App\Traits\PermitUlid;
use App\Traits\StatusTypeId;
use App\Traits\TransactionNumber;
use App\Traits\TransactionUlid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    use TransactionUlid, TransactionNumber, PermitUlid, PermitNumber, StatusTypeId, InteractionUlid, InteractionNumber;

    public $application;

    public $supportInteractionComment;

    public function mount($application)
    {
        $this->application = Application::where('ulid', $application)->first();
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
                    'permit_type_id' => 3,
                    'application_id' => $this->application->id,
                ])->periods()->create([
                    'start_date' => now(),
                    'end_date' => now()->addYear(),
                    'application_id' => $this->application->account->id,
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

    public function placeholder()
    {
        return view('placeholders.views.citizens.application-show');
    }

    public function makeSupportInteraction()
    {

        $this->validate([
            'supportInteractionComment' => 'required|string|min:10|max:255',
        ]);

        $interaction = $this->application->interactions()->create([
            'ulid' => $this->createInteractionUlid(),
            'number' => $this->createInteractionNumber(),
            'interaction_type_id' => 2, // Assuming 2 is the ID for "support" interaction type
            'account_id' => $this->application->account_id,
            'user_id' => Auth::user()->id,
        ]);
        $interaction->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('open'), // Assuming 1 is the ID for "open" status
            'changed_by' => $this->application->account_id,
        ]);
        $interaction->messages()->create([
            'message' => $this->supportInteractionComment,
            'created_account_id' => $this->application->account_id,
            'user_id' => Auth::user()->id,

        ]);
        $interaction->messages()->create([
            'message' => 'Mensaje de soporte recibido. El municipio se pondrá en contacto contigo pronto.',
            'created_admin_id' => 1,

        ]);
        $this->dispatch('close-modal', 'create-support-interaction-modal');
        session()->flash('success', 'Interacción de soporte creada exitosamente. El municipio se pondrá en contacto contigo pronto.');
        return $this->redirect(route('citizens.applications.show', $this->application->ulid), navigate: true);
    }

    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.applications.show');
    }
}
