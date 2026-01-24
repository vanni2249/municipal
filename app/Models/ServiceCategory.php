<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'key',
        'en_name',
        'es_name'
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function getNameAttribute()
    {
        return app()->getLocale() === 'es' ? $this->es_name : $this->en_name;
    }
}
