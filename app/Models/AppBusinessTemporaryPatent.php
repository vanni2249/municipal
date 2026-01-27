<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessTemporaryPatent extends Model
{
    protected $table = 'app_business_temporary_patents';

    protected $fillable = [
        'business_id',
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
        return $this->belongsTo(Business::class, 'business_id');
    }

}
