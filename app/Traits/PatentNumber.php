<?php

namespace App\Traits;

use App\Models\Patent;
use Illuminate\Support\Str;


trait PatentNumber  
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createPatentNumber()
    {
        do {
            $number = $this->generatePatentNumber();
        } while (!$this->isPatentNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generatePatentNumber()
    {
        return 'PAT-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isPatentNumberUnique($number)
    {
        return !Patent::where('number', $number)->exists();
    }
}
