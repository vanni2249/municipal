<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionCategory extends Model
{
    protected $fillable = [
        'key',
        'en_name',
        'es_name',
    ];

    public function actions()
    {
        return $this->hasMany(Action::class);
    }
}
