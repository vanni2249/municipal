<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessRenewPatent extends Model
{
    protected $table = 'app_business_renew_patents';

    protected $fillable = [
        'business_id',
        'renewal_date',
        'sales',
        'fee',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
