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
        'payment_method',
        'reference',
    ];

    public function transactionable()
    {
        return $this->morphTo();
    }
}
