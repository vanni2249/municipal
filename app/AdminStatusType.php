<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AdminStatusType extends Model
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

    public function adminStatuses()
    {
        return $this->hasMany(AdminStatus::class, 'admin_status_type_id');
    }
}
