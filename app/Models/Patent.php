<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'patentable_id',
        'patentable_type',
    ];

    public function patentable()
    {
        return $this->morphTo();
    }

    public function periods()
    {
        return $this->morphMany(Period::class, 'periodable');
    }
    
}
