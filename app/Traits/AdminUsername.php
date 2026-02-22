<?php

namespace App\Traits;

use App\Models\Admin;
use Illuminate\Support\Str;


trait AdminUsername
{
    public function createAdminUsername()
    {
        do {
            $username = $this->generateAdminUsername();
        } while (!$this->isAdminUsernameUnique($username));
        return $username;
    }

    private function generateAdminUsername()
    {
        // No acento en ninguna vocal, solo la primera letra del nombre y el apellido completo, todo en minúsculas

        $lastName = Str::lower(Str::before($this->employee->last_name, ' '));
        $firstName = Str::lower(Str::before($this->employee->name, ' '));
        $lastName = Str::ascii($lastName);
        $firstName = Str::ascii($firstName);

        $counter = 1;
        $username = $lastName . $firstName[0] . $counter;
        while (!$this->isAdminUsernameUnique($username)) {
            $counter++;
            $username = $lastName . $firstName[0] . $counter;
        }
        return $username;
    }

    private function isAdminUsernameUnique($username)
    {
        return !Admin::where('username', $username)->exists();
    }
}