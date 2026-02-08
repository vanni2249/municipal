<?php

namespace App\Traits;

use App\Models\Invoice;
use Illuminate\Support\Str;


trait InvoiceUlid
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createInvoiceUlid()
    {
        do {
            $ulid = $this->generateInvoiceUlid();
        } while (!$this->isInvoiceUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateInvoiceUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isInvoiceUlidUnique($ulid)
    {
        return !Invoice::where('ulid', $ulid)->exists();
    }
}
