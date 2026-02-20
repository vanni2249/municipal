<?php

namespace App\Traits;

use App\Models\Account;
use App\Models\Employee;
use Illuminate\Support\Str;


trait EmployeeUlid
{
    /**
     * Create a ULID for the employee.
     *
     * @return string
     */
    public function createEmployeeUlid()
    {
        do {
            $ulid = $this->generateEmployeeUlid();
        } while (!$this->isEmployeeUlidUnique($ulid));
        return $ulid;
    }
    /**
     * Generate a unique ULID for the employee.
     *
     * @return string
     */
    public function generateEmployeeUlid()
    {
        return (string) Str::ulid();
    }

    // Verify if the ULID is unique
    public function isEmployeeUlidUnique($ulid)
    {
        return !Employee::where('ulid', $ulid)->exists();
    }
}
