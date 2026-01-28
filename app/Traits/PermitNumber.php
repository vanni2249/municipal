<?php

namespace App\Traits;

use App\Models\Permit;
use Illuminate\Support\Str;


trait PermitNumber
{
    /**
     * Create a registration code for the permit.
     *
     * @return string
     */
    public function createPermitNumber()
    {
        do {
            $number = $this->generatePermitNumber();
        } while (!$this->isPermitNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generatePermitNumber()
    {
        return 'PERMIT-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isPermitNumberUnique($number)
    {
        return !Permit::where('number', $number)->exists();
    }
}
