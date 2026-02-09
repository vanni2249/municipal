<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'permit_type_id',
        'permitable_id',
        'permitable_type',
        'application_id',
    ];

    public function permitType()
    {
        return $this->belongsTo(PermitType::class);
    }

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
