<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class InspectionType extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'slug',
        'name',
    ];

    protected $casts = [
        'name' => 'array',
    ];

    public function inspections()
    {
        return $this->hasMany(Inspection::class);
    }
}
