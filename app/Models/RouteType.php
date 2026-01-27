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
    
    protected $casts = [
        'name' => 'array',
    ];

    public function routes()
    {
        return $this->hasMany(Route::class, 'route_type_id');
    }
}
