<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class StatusType extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'slug',
        'name',
        'variant',
    ];

    protected $casts = [
        'name' => 'array',
    ];

}
