<?php

namespace App\Traits;

use App\Models\LogType;
use App\Models\StatusType;


trait LogTypeId
{
    public function getLogTypeId($slug)
    {
        return LogType::where('slug', $slug)->first()->id;
    }
}