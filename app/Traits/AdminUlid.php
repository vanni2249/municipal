<?php

namespace App\Traits;

use App\Models\Admin;
use Illuminate\Support\Str;


trait AdminUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createAdminUlid()
    {
        do {
            $ulid = $this->generateAdminUlid();
        } while (!$this->isAdminUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateAdminUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isAdminUlidUnique($ulid)
    {
        return !Admin::where('ulid', $ulid)->exists();
    }
}
