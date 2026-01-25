<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessStatus extends Model
{
    protected $fillable = [
        'business_id',
        'business_status_type_id',
        'changed_by',
        'reason',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function statusType()
    {
        return $this->belongsTo(BusinessStatusType::class, 'business_status_type_id');
    }

    public function changer()
    {
        return $this->belongsTo(Admin::class, 'changed_by');
    }
}
