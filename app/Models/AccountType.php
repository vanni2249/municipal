<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AccountType extends Model
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

    public function accounts()
    {
        return $this->hasMany(Account::class, 'account_type_id');
    }
}
