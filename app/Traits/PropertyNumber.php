<?php

namespace App\Traits;

use App\Models\Property;
use Illuminate\Support\Str;


trait PropertyNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createPropertyNumber()
    {
        do {
            $number = $this->generatePropertyNumber();
        } while (!$this->isPropertyNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generatePropertyNumber()
    {
        return 'PRP-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isPropertyNumberUnique($number)
    {
        return !Property::where('number', $number)->exists();
    }
}
