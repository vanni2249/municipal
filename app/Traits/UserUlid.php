<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Str;


trait UserUlid
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createUserUlid()
    {
        do {
            $ulid = $this->generateUserUlid();
        } while (!$this->isUserUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateUserUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isUserUlidUnique($ulid)
    {
        return !User::where('ulid', $ulid)->exists();
    }
}
