<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    protected $fillable = ['key', 'en_name', 'es_name'];

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }
}
