<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'permitable_id',
        'permitable_type',
        'application_id',
    ];

    public function permitable()
    {
        return $this->morphTo();
    }

    public function period()
    {
        return $this->morphOne(Period::class, 'periodable');
    }

    public function periods()
    {
        return $this->morphMany(Period::class, 'periodable');
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
