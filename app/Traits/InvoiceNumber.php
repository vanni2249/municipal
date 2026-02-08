<?php

namespace App\Traits;

use App\Models\Invoice;
use Illuminate\Support\Str;


trait InvoiceNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createInvoiceNumber()
    {
        do {
            $number = $this->generateInvoiceNumber();
        } while (!$this->isInvoiceNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateInvoiceNumber()
    {
        return 'INV-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isInvoiceNumberUnique($number)
    {
        return !Invoice::where('number', $number)->exists();
    }
}
