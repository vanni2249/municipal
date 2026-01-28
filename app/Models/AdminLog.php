<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    protected $fillable = [
        'admin_id',
        'log_type_id',
        'loggable_type',
        'loggable_id',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function logType()
    {
        return $this->belongsTo(LogType::class);
    }

    public function loggable()
    {
        return $this->morphTo();
    }
}
