<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'route_type_id',
        'routeable_id',
        'routeable_type',
    ];

    public function routeable()
    {
        return $this->morphTo();
    }

    public function routeType()
    {
        return $this->belongsTo(RouteType::class, 'route_type_id');
    }
}
