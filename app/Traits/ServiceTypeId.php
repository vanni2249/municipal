<?php

namespace App\Traits;

use App\Models\LogType;
use App\Models\ServiceType;
use App\Models\StatusType;


trait ServiceTypeId
{
    public function getServiceTypeId($slug)
    {
        return ServiceType::where('slug', $slug)->first()->id;
    }
}