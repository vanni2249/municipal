<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    protected $fillable = [
        'user_id',
        'user_status_type_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statusType()
    {
        return $this->belongsTo(UserStatusType::class, 'user_status_type_id');
    }
}
