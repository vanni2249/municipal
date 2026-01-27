<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Inspection;
use Illuminate\Support\Str;


trait InspectionNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createInspectionNumber()
    {
        do {
            $number = $this->generateInspectionNumber();
        } while (!$this->isInspectionNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateInspectionNumber()
    {
        return 'INS-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isInspectionNumberUnique($number)
    {
        return !Inspection::where('number', $number)->exists();
    }
}
