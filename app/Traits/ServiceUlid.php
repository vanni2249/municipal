<?php

namespace App\Traits;

use App\Models\Service;
use Illuminate\Support\Str;


trait ServiceUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createServiceUlid()
    {
        do {
            $ulid = $this->generateServiceUlid();
        } while (!$this->isServiceUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateServiceUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isServiceUlidUnique($ulid)
    {
        return !Service::where('ulid', $ulid)->exists();
    }
}
