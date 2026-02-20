<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'name',
        'last_name',
        'email',
        'phone',
        'birth_date',
        'hired_at',
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

}
