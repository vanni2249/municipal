<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InteractionMessage extends Model
{
    protected $fillable = [
        'interaction_id',
        'message',
        'created_account_id',
        'read_account_id',
        'read_account_at',
        'created_business_id',
        'read_business_id',
        'read_business_at',
        'user_id',
        'created_admin_id',
        'read_admin_id',
        'read_admin_at',
    ];

    public function interaction()
    {
        return $this->belongsTo(Interaction::class);
    }

    public function accountCreated()
    {
        return $this->belongsTo(Account::class, 'created_account_id');
    }

    public function accountRead()
    {
        return $this->belongsTo(Account::class, 'read_account_id');
    }

    public function businessCreated()
    {
        return $this->belongsTo(Business::class, 'created_business_id');
    }

    public function businessRead()
    {
        return $this->belongsTo(Business::class, 'read_business_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adminCreated()
    {
        return $this->belongsTo(Admin::class, 'created_admin_id');
    }

    public function adminRead()
    {
        return $this->belongsTo(Admin::class, 'read_admin_id');
    }

    public function getMessageReadAdmin()
    {
        return $this->read_admin_id ? __('Leído') : __('No leído');
    }
    
    public function getMessageReadAccount()
    {
        return $this->read_account_id ? __('Leído') : __('No leído');

    }
}
