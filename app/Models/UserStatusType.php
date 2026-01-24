<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class UserStatusType extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'slug',
        'name',
        'variant',
    ];

    public function statuses()
    {
        return $this->hasMany(UserStatus::class, 'user_status_type_id');
    }
}
