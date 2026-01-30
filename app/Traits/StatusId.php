<?php

namespace App\Traits;

use App\Models\StatusType;


trait StatusId
{
    public function getStatusId($slug)
    {
        return StatusType::where('slug', $slug)->first()->id;
    }
}