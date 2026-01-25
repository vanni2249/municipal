<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PlaceType extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'slug',
        'name',
    ];

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
