<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessTemporaryPatent extends Model
{
    protected $table = 'app_business_temporary_patents';

    protected $fillable = [
        'started_at',
        'ended_at',
        'document_id',
        'amount',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }

}
