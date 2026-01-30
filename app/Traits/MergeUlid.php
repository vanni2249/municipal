<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Application;
use App\Models\Merge;
use Illuminate\Support\Str;


trait MergeUlid
{
    /**
     * Create a registration code for the admin.
     *
     * @return string
     */
    public function createMergeUlid()
    {
        do {
            $ulid = $this->generateMergeUlid();
        } while (!$this->isMergeUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateMergeUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isMergeUlidUnique($ulid)
    {
        return !Merge::where('ulid', $ulid)->exists();
    }
}
