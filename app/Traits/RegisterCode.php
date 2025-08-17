<?php
// Create a trait to handle registration codes
namespace App\Traits;

use App\Models\Register;
use Illuminate\Support\Str;

trait RegisterCode
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createRegisterCode()
    {
        do {
            $code = $this->generateRegisterCode();
        } while (!$this->isCodeUnique($code));
        return $code;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateRegisterCode()
    {
        return 'REG-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isCodeUnique($code)
    {
        return !Register::where('code', $code)->exists();

    }
}