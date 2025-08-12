<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type_id',
        'name',
        'email',
        'phone',
        'password',
        'company_name',
        'number',
        'address',
        'city',
        'state',
        'postal_code',
        'date_of_birth',
        'approved_at',
        'approved_by',
        'blocked_at',
        'blocked_by',
        'blocked_reason',
        'last_login_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function register()
    {
        return $this->hasOne(Register::class, 'user_id');
    }

    public function registers()
    {
        return $this->hasMany(Register::class, 'user_id');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function getLastLogin(): ?string
    {
        return $this->last_login_at ? \Carbon\Carbon::parse($this->last_login_at)->diffForHumans() : 'Nunca';
    }

    public function approvedBy()
    {
        return $this->belongsTo(Admin::class, 'approved_by');
    }

    public function blockedBy()
    {
        return $this->belongsTo(Admin::class, 'blocked_by');
    }

}
