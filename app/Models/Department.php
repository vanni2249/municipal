<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Department extends Model
{
    use HasTranslations;

    public $translatable = [
        'name',
        'description',
    ];

    protected $fillable = [
        'ulid',
        'number',
        'slug',
        'name',
        'description',
        'phone',
        'email',
        'address',
    ];

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class, 'department_id');
    }
}
