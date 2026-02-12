<?php

namespace App\Livewire\Admin\Transactions;

use App\Models\Transaction;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $transaction;

    public function mount($transaction)
    {
        $this->transaction = Transaction::where('ulid', $transaction)->firstOrFail();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.transactions.show', [
            'transaction' => $this->transaction,
        ]);
    }
}
