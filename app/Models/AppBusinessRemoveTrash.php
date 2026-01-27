<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessRemoveTrash extends Model
{
    protected $table = 'app_business_remove_trashes';

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
