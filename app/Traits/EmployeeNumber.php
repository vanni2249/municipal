<?php

namespace App\Traits;

use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Support\Str;


trait EmployeeNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createEmployeeNumber()
    {
        do {
            $number = $this->generateEmployeeNumber();
        } while (!$this->isEmployeeNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateEmployeeNumber()
    {
        return 'EMP-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isEmployeeNumberUnique($number)
    {
        return !Employee::where('number', $number)->exists();
    }
}
