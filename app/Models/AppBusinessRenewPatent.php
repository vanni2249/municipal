<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessRenewPatent extends Model
{
    protected $table = 'app_business_renew_patents';

    protected $fillable = [
        'business_id',
        'sales_amount',
        'started_at',
        'ended_at',
        'document_id',
        'amount',
        'fee',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
