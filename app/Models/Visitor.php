<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'name',
        'date_of_birth',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'admin_id',
    ];
}
