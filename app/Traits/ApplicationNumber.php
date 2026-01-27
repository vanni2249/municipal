<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Application;
use Illuminate\Support\Str;


trait ApplicationNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createApplicationNumber()
    {
        do {
            $number = $this->generateApplicationNumber();
        } while (!$this->isApplicationNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateApplicationNumber()
    {
        return 'APP-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isApplicationNumberUnique($number)
    {
        return !Application::where('number', $number)->exists();
    }
}
