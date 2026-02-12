<?php

namespace App\Livewire\Admin\Invoices;

use App\Models\Invoice;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $invoice;

    public function mount($invoice)
    {
        $this->invoice = Invoice::where('ulid', $this->invoice)->firstOrFail();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.invoices.show', [
            'invoice' => $this->invoice,
        ]);
    }
}
