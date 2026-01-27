<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessUsePermit extends Model
{
    protected $table = 'app_business_use_permits';

    protected $fillable = [
        'business_id',
        'permit_number',
        'started_at',
        'ended_at',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
