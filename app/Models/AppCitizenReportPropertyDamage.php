<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenReportPropertyDamage extends Model
{
    protected $fillable = [
        'description',
        'damage_type',
    ];
}
