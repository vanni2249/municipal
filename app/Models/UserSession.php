<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSession extends Model
{
    protected $fillable = [
        'user_id',
        'session_token',
        'device_info',
        'platform',
        'browser',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
