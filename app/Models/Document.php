<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'document_type_id',
        'documentable_type',
        'documentable_id',
    ];

    public function documentable()
    {
        return $this->morphTo();
    }

    public function applications()
    {
        return $this->belongsToMany(Application::class, 'application_document');
    }
}
