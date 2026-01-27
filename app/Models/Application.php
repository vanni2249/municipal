<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'applicable_type',
        'applicable_id',
        'service_id',
    ];

    public function applicable()
    {
        return $this->morphTo();
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'application_document');
    }
}
