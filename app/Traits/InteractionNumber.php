<?php

namespace App\Traits;

use App\Models\Interaction;
use Illuminate\Support\Str;


trait InteractionNumber
{
    /**
     * Create a registration code for the interaction.
     *
     * @return string
     */
    public function createInteractionNumber()
    {
        do {
            $number = $this->generateInteractionNumber();
        } while (!$this->isInteractionNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration number.
     *
     * @return string
     */
    public function generateInteractionNumber()
    {
        return 'INT-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isInteractionNumberUnique($number)
    {
        return !Interaction::where('number', $number)->exists();
    }
}
