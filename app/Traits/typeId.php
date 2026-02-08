<?php

namespace App\Traits;

use App\Models\StatusType;


trait TypeId
{
    public function getTypeId($model, $slug)
    {
        return !$model::where('slug', $slug)->first()->id;
    }
}