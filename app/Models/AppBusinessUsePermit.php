<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessUsePermit extends Model
{
    protected $table = 'app_business_use_permits';

    protected $fillable = [
        'business_id',
        'permit_number',
        'start_date',
        'end_date',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
