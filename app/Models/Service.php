<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasTranslations;

    public array $translatable = ['title', 'description'];

    public $fillable = [
        'ulid',
        'number',
        'slug',
        'title',
        'description',
        'account_type_id',
        'service_type_id',
        'amount',
        'fee',
    ];

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }

    public function accountType()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'service_id');
    }

    public function interactions()
    {
        return $this->morphMany(Interaction::class, 'interactionable');
    }
}
