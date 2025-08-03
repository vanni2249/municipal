<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'key',
        'en_name',
        'es_name',
        'en_description',
        'es_description',
        'is_active',
    ];

    /**
     * Get the users associated with the type.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the registers associated with the type.
     */
    public function registers()
    {
        return $this->hasMany(Register::class);
    }
}
