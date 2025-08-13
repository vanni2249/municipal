<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = [
        'user_id',
        'code',
        'number',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'postal_code',
        'date_of_birth',
        'admin_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
