<?php

namespace App\Traits;

use App\Models\AccountBusiness;
use Illuminate\Support\Str;


trait AccountBusinessUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createAccountBusinessUlid()
    {
        do {
            $ulid = $this->generateAccountBusinessUlid();
        } while (!$this->isAccountBusinessUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateAccountBusinessUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isAccountBusinessUlidUnique($ulid)
    {
        return !AccountBusiness::where('ulid', $ulid)->exists();
    }
}
