<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'number',
        'code',
        'phone',
        'address',
        'city',
        'postal_code',
        'date_of_birth',
        'company_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
