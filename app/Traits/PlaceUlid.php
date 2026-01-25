<?php

namespace App\Traits;

use App\Models\Place;
use Illuminate\Support\Str;


trait PlaceUlid
{
    /**
     * Create a registration code for the user.
     *
     * @return string
     */
    public function createPlaceUlid()
    {
        do {
            $ulid = $this->generatePlaceUlid();
        } while (!$this->isPlaceUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generatePlaceUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isPlaceUlidUnique($ulid)
    {
        return !Place::where('ulid', $ulid)->exists();
    }
}
