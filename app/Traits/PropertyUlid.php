<?php

namespace App\Traits;

use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Str;


trait PropertyUlid
{
    /**
     * Create a registration code for the property.
     *
     * @return string
     */
    public function createPropertyUlid()
    {
        do {
            $ulid = $this->generatePropertyUlid();
        } while (!$this->isPropertyUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generatePropertyUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isPropertyUlidUnique($ulid)
    {
        return !Property::where('ulid', $ulid)->exists();
    }
}
