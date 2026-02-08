<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'periodable_id',
        'periodable_type',
    ];

    public function periodable()
    {
        return $this->morphTo();
    }
}
