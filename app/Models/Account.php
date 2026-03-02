<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'code',
        'account_type_id',
        'name',
        'lastname',
        'email',
        'phone',
        'user_id',
    ];

    public function accountType()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }

    public function defaults()
    {
        return $this->morphMany(UserDefault::class, 'defaultable');
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function merges()
    {
        return $this->hasMany(Merge::class, 'account_accountant_id');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function permits()
    {
        return $this->morphMany(Permit::class, 'permitable');
    }

    public function interactions()
    {
        return $this->hasMany(Interaction::class);
    }

    public function name()
    {
        if ($this->user_id) {
            return $this->user->name . ' ' . $this->user->lastname;
        } else {
            return $this->name . ' ' . $this->lastname;
        }
    }
}
