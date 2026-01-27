<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class InteractionType extends Model
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

    public function interactions()
    {
        return $this->hasMany(Interaction::class, 'interaction_type_id');
    }
}
