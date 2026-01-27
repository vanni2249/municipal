<?php

namespace App\Traits;

use App\Models\Document;
use Illuminate\Support\Str;


trait DocumentUlid
{
    /**
     * Create a registration code for the document.
     *
     * @return string
     */
    public function createDocumentUlid()
    {
        do {
            $ulid = $this->generateDocumentUlid();
        } while (!$this->isDocumentUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique registration code.
     *
     * @return string
     */
    public function generateDocumentUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the code is unique
    public function isDocumentUlidUnique($ulid)
    {
        return !Document::where('ulid', $ulid)->exists();
    }
}
