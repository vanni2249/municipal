<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenResidencialConstructionPermit extends Model
{
    protected $table = 'app_citizen_residencial_construction_permits';

    protected $fillable = [
        'address_id',
        'owner_name',
        'description',
        'expiry_date',
        'contractor_name',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
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
