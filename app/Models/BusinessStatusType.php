<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BusinessStatusType extends Model
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

    public function businessStatuses()
    {
        return $this->hasMany(BusinessStatus::class, 'business_status_type_id');
    }
}
