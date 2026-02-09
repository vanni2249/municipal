<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PermitType extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];
    
    protected $fillable = [
        'slug',
        'name',
    ];

    protected $casts = [
        'name' => 'array',
    ];

    public function permits()
    {
        return $this->hasMany(Permit::class);
    }
}
