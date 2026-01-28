<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Permit;
use Illuminate\Support\Str;


trait PermitUlid
{
    /**
     * Create a registration code for the permit.
     *
     * @return string
     */
    public function createPermitUlid()
    {
        do {
            $ulid = $this->generatePermitUlid();
        } while (!$this->isPermitUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generatePermitUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isPermitUlidUnique($ulid)
    {
        return !Permit::where('ulid', $ulid)->exists();
    }
}
