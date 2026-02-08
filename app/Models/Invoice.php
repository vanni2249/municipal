<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'invoicable_id',
        'invoicable_type',
        'start_date',
        'amount',
    ];

    public function invoicable()
    {
        return $this->morphTo();
    }

    public function transactions()
    {
        return $this->morphMany(Transaction::class, 'transactionable');
    }
}
