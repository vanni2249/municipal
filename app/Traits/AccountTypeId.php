<?php

namespace App\Traits;

use App\Models\AccountType;
use App\Models\LogType;
use App\Models\StatusType;


trait AccountTypeId
{
    public function getAccountTypeId($slug)
    {
        return AccountType::where('slug', $slug)->first()->id;
    }
}