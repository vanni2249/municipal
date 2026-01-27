<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Application;
use Illuminate\Support\Str;


trait ApplicationUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createApplicationUlid()
    {
        do {
            $ulid = $this->generateApplicationUlid();
        } while (!$this->isApplicationUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateApplicationUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isApplicationUlidUnique($ulid)
    {
        return !Application::where('ulid', $ulid)->exists();
    }
}
