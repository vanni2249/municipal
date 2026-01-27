<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessRemoveDebris extends Model
{
    protected $table = 'app_business_remove_debris';

    protected $fillable = [
        'business_id',
        'description',
        'amount',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
