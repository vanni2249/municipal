<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceType extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $table = 'service_type';

    protected $fillable = [
        'slug',
        'name',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'service_type_id');
    }

    public function applications()
    {
        return $this->hasManyThrough(Application::class, Service::class);
    }
}
