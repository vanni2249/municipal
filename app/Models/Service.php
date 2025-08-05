<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $fillable = [
        'service_category_id',
        'es_name',
        'en_name',
        'es_description',
        'en_description',
        'slug',
        'price',
        'is_active',
    ];

    public function types()
    {
        return $this->belongsToMany(Type::class, 'service_type', 'service_id', 'type_id');
    }
}
