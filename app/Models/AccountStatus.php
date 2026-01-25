<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountStatus extends Model
{
    protected $fillable = [
        'account_id',
        'account_status_type_id',
        'changed_by',
        'reason',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function accountStatusType()
    {
        return $this->belongsTo(AccountStatusType::class, 'account_status_type_id');
    }
}
