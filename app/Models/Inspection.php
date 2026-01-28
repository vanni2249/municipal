<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'inspection_type_id',
        'inspectable_type',
        'inspectable_id',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function inspectable()
    {
        return $this->morphTo();
    }

    public function inspectionType()
    {
        return $this->belongsTo(InspectionType::class);
    }
    
    public function route()
    {
        return $this->belongsTo(Route::class, 'inspection_route')->withTimestamps();
    }
}
