<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'historyable_type',
        'historyable_id',
        'service_id',
    ];

    public function historyable()
    {
        return $this->morphTo();
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
