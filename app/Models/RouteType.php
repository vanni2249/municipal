<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class RouteType extends Model
{
    use HasTranslations;

    public $translatable = ['name'];
    
    protected $fillable = [
        'slug',
        'name',
    ];
    
}
