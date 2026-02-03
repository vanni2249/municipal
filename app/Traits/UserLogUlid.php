<?php

namespace App\Traits;

use App\Models\Admin;
use App\Models\UserLog;
use Illuminate\Support\Str;


trait UserLogUlid
{
    /**
     * Create a registration code for the user log.
     *
     * @return string
     */
    public function createUserLogUlid()
    {
        do {
            $ulid = $this->generateUserLogUlid();
        } while (!$this->isUserLogUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateUserLogUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isUserLogUlidUnique($ulid)
    {
        return !UserLog::where('ulid', $ulid)->exists();
    }
}
