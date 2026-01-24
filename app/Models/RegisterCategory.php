<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterCategory extends Model
{
   protected $fillable = ['en_name', 'es_name'];

    /**
     * Get the English name of the register category.
     *
     * @return string
     */
    public function getEnNameAttribute()
    {
        return $this->attributes['en_name'];
    }

    /**
     * Get the Spanish name of the register category.
     *
     * @return string
     */
    public function getEsNameAttribute()
    {
        return $this->attributes['es_name'];
    }

    public function registers()
    {
        return $this->hasMany(Register::class, 'register_category_id');
    }
}
