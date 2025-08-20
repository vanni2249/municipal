<?php
// Create a trait to handle registration codes
namespace App\Traits;

use App\Models\Business;
use Illuminate\Support\Str;

trait BusinessCode
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createBusinessCode()
    {
        do {
            $code = $this->generateBusinessCode();
        } while (!$this->isCodeUnique($code));
        return $code;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateBusinessCode()
    {
        return 'BUS-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isCodeUnique($code)
    {
        return !Business::where('code', $code)->exists();

    }
}