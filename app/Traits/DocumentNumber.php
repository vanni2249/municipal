<?php

namespace App\Traits;

use App\Models\Document;
use Illuminate\Support\Str;


trait DocumentNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createDocumentNumber()
    {
        do {
            $number = $this->generateDocumentNumber();
        } while (!$this->isDocumentNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateDocumentNumber()
    {
        return 'DOC-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isDocumentNumberUnique($number)
    {
        return !Document::where('number', $number)->exists();
    }
}
