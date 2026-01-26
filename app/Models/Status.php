<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Status extends Model
{
    protected $fillable = [
        'statusable_type',
        'statusable_id',
        'status_type_id',
        'changed_by',
        'reason',
    ];

    public function statusable()
    {
        return $this->morphTo();
    }

    public function statusType()
    {
        return $this->belongsTo(StatusType::class, 'status_type_id');
    }
}
