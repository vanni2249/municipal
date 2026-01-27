<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Route;
use Illuminate\Support\Str;


trait RouteUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createRouteUlid()
    {
        do {
            $ulid = $this->generateRouteUlid();
        } while (!$this->isRouteUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateRouteUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isRouteUlidUnique($ulid)
    {
        return !Route::where('ulid', $ulid)->exists();
    }
}
