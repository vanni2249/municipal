<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reportable_id',
        'reportable_type',
        'title',
        'description',
    ];

    public function reportable()
    {
        return $this->morphTo();
    }
}
