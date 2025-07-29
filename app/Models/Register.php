<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'user_id',
        'number',
        'code',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'postal_code',
        'date_of_birth',
        'company_name',
        'comercial_number',
        'is_veteran',
        'is_disabled',
        'is_senior',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
