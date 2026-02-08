<?php

namespace App\Traits;

use App\Models\Invoice;
use App\Models\Transaction;
use Illuminate\Support\Str;


trait TransactionUlid
{
    /**
     * Create a transaction ULID for the user.
     *
     * @return string
     */
    public function createTransactionUlid()
    {
        do {
            $ulid = $this->generateTransactionUlid();
        } while (!$this->isTransactionUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique transaction ULID.
     *
     * @return string
     */
    public function generateTransactionUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isTransactionUlidUnique($ulid)
    {
        return !Transaction::where('ulid', $ulid)->exists();
    }
}
