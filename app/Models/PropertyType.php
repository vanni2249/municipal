<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PropertyType extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'slug',
        'name',
    ];

    protected $casts = [
        'name' => 'array',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'property_type_id');
    }
}
