<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessConstructionPermit extends Model
{
    protected $table = 'app_business_construction_permits';

    protected $fillable = [
        'business_id',
        'permit_number',
        'project_name',
        'project_description',
        'contractor_name',
        'contractor_license_number',
        'start_date',
        'end_date',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
