<?php

namespace App\Traits;

use App\Models\Account;
use Illuminate\Support\Str;


trait AccountNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createAccountNumber()
    {
        do {
            $number = $this->generateAccountNumber();
        } while (!$this->isAccountNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateAccountNumber()
    {
        return 'ACC-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isAccountNumberUnique($number)
    {
        return !Account::where('number', $number)->exists();
    }
}
