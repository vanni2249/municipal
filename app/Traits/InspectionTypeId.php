<?php

namespace App\Traits;

use App\Models\InspectionType;


trait InspectionTypeId
{
    public function getInspectionTypeId($slug)
    {
        return InspectionType::where('slug', $slug)->first()->id;
    }
}