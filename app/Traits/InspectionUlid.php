<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Inspection;
use Illuminate\Support\Str;


trait InspectionUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createInspectionUlid()
    {
        do {
            $ulid = $this->generateInspectionUlid();
        } while (!$this->isInspectionUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateInspectionUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isInspectionUlidUnique($ulid)
    {
        return !Inspection::where('ulid', $ulid)->exists();
    }
}
