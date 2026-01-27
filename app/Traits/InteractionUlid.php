<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Interaction;
use Illuminate\Support\Str;


trait InteractionUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createInteractionUlid()
    {
        do {
            $ulid = $this->generateInteractionUlid();
        } while (!$this->isInteractionUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateInteractionUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isInteractionUlidUnique($ulid)
    {
        return !Interaction::where('ulid', $ulid)->exists();
    }
}
