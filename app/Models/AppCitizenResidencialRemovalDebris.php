<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCitizenResidencialRemovalDebris extends Model
{
    protected $table = 'app_citizen_residencial_removal_debris';

    protected $fillable = [
        'address_id',
        'description',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }
    

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
