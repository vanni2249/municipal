<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TransactionMethodType extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $fillable = [
        'slug',
        'name',
    ];

    public function transactionMethods()
    {
        return $this->hasMany(TransactionMethodType::class, 'transaction_method_type_id');
    }
}
