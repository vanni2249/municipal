<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenReportPropertyDamage extends Model
{
    protected $fillable = [
        'property',
        'description',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }
}
