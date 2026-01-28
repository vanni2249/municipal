<?php

namespace App\Traits;

use App\Models\Patent;
use Illuminate\Support\Str;


trait PatentUlid
{
    /**
     * Create a registration code for the patent.
     *
     * @return string
     */
    public function createPatentUlid()
    {
        do {
            $ulid = $this->generatePatentUlid();
        } while (!$this->isPatentUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code for the patent.
     *
     * @return string
     */
    public function generatePatentUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isPatentUlidUnique($ulid)
    {
        return !Patent::where('ulid', $ulid)->exists();
    }
}
