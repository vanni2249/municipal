<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Application;
use App\Models\Merge;
use Illuminate\Support\Str;


trait MergeNumber
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createMergeNumber()
    {
        do {
            $number = $this->generateMergeNumber();
        } while (!$this->isMergeNumberUnique($number));
        return $number;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateMergeNumber()
    {
        return 'MERGE-' . Str::upper(Str::random(6)); // Already returns a mix of numbers and letters
    }

    // Verify if the code is unique
    public function isMergeNumberUnique($number)
    {
        return !Merge::where('number', $number)->exists();
    }
}
