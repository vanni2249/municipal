<?php

namespace App\Traits;

use App\Models\Place;
use Illuminate\Support\Str;


trait PlaceNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createPlaceNumber()
    {
        do {
            $number = $this->generatePlaceNumber();
        } while (!$this->isPlaceNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generatePlaceNumber()
    {
        return 'PLC-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isPlaceNumberUnique($number)
    {
        return !Place::where('number', $number)->exists();
    }
}
