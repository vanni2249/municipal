<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    protected $fillable = [
        'ulid',
        'user_id',
        'account_id',
        'log_type_id',
        'loggable_type',
        'loggable_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
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
