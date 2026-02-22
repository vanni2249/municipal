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
        'birth_date',
        'gender',
        'email',
        'phone',
        'hired_at',
        'terminated_at',
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

}
