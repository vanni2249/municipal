<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'user_id',
        'code',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'postal_code',
        'date_of_birth',
    ];
}
