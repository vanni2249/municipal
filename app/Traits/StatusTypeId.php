<?php

namespace App\Traits;

use App\Models\StatusType;


trait StatusTypeId
{
    public function getStatusTypeId($slug)
    {
        return StatusType::where('slug', $slug)->first()->id;
    }
}