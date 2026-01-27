<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Route;
use Illuminate\Support\Str;


trait RouteNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createRouteNumber()
    {
        do {
            $number = $this->generateRouteNumber();
        } while (!$this->isRouteNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration number.
     *
     * @return string
     */
    public function generateRouteNumber()
    {
        return 'ROU-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isRouteNumberUnique($number)
    {
        return !Route::where('number', $number)->exists();
    }
}
