<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $fillable = [
        'application_id',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
