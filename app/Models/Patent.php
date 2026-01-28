<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
    protected $fillable = [
        'ulid',
        'number',
    ];

    public function applications()
    {
        return $this->belongsToMany(Application::class, 'application_patent');
    }
}
