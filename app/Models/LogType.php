<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LogType extends Model
{
    use HasTranslations;

    protected $fillable = [
        'slug',
        'name',
    ];

    public $translatable = ['name'];

    // public function adminLogs()
    // {
    //     return $this->hasMany(::class);
    // }
}
