<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Business;
use Illuminate\Support\Str;


trait BusinessUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createBusinessUlid()
    {
        do {
            $ulid = $this->generateBusinessUlid();
        } while (!$this->isBusinessUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateBusinessUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isBusinessUlidUnique($ulid)
    {
        return !Business::where('ulid', $ulid)->exists();
    }
}
