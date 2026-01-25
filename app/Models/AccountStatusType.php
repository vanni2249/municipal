<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AccountStatusType extends Model
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

    public function accounts()
    {
        return $this->hasMany(Account::class, 'account_status_type_id');
    }
}
