<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'transactionable_type',
        'transactionable_id',
        'status',
        'amount',
        'transaction_method_type_id',
        'reference',
    ];

    public function transactionable()
    {
        return $this->morphTo();
    }

    public function transactionMethodType()
    {
        return $this->belongsTo(TransactionMethodType::class);
    }
}
