<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'route_type_id',
        'admin_id',
    ];

    public function routeType()
    {
        return $this->belongsTo(RouteType::class, 'route_type_id');
    }

    public function inspections()
    {
        return $this->belongsToMany(Inspection::class, 'inspection_route')->withTimestamps();
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }
}
