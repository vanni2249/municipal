<?php

namespace App\Traits;

use App\Models\AccountBusiness;
use Illuminate\Support\Str;


trait AccountBusinessNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createAccountBusinessNumber()
    {
        do {
            $number = $this->generateAccountBusinessNumber();
        } while (!$this->isAccountBusinessNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateAccountBusinessNumber()
    {
        return 'ACCBUS-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isAccountBusinessNumberUnique($number)
    {
        return !AccountBusiness::where('number', $number)->exists();
    }
}
