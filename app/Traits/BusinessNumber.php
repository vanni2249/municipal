<?php

namespace App\Traits;

use App\Models\Business;
use Illuminate\Support\Str;


trait BusinessNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createBusinessNumber()
    {
        do {
            $number = $this->generateBusinessNumber();
        } while (!$this->isBusinessNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateBusinessNumber()
    {
        return 'BUS-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isBusinessNumberUnique($number)
    {
        return !Business::where('number', $number)->exists();
    }
}
