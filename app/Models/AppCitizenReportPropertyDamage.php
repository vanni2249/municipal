<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenReportPropertyDamage extends Model
{
    protected $fillable = [
        'property_id',
        'description',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }
}
