<?php

namespace App\Traits;

use App\Models\Service;
use Illuminate\Support\Str;


trait ServiceNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createServiceNumber()
    {
        do {
            $number = $this->generateServiceNumber();
        } while (!$this->isServiceNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateServiceNumber()
    {
        return 'SERV-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isServiceNumberUnique($number)
    {
        return !Service::where('number', $number)->exists();
    }
}
