<?php

namespace App\Traits;

use App\Models\Account;
use Illuminate\Support\Str;


trait AccountUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createAccountUlid()
    {
        do {
            $ulid = $this->generateAccountUlid();
        } while (!$this->isAccountUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateAccountUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isAccountUlidUnique($ulid)
    {
        return !Account::where('ulid', $ulid)->exists();
    }
}
