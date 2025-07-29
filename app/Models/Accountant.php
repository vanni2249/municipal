<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
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
        'company_name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
