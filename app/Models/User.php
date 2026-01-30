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
        'ulid',
        'number',
        'name',
        'lastname',
        'email',
        'password',
        'phone',
        'date_of_birth',
        'gender',
        'terms_accepted',
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
            'gender' => 'string',
        ];
    }

    public function sessions()
    {
        return $this->hasMany(UserSession::class);
    }
    public function session()
    {
        return $this->hasOne(UserSession::class)->latestOfMany();
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function userLogs()
    {
        return $this->morphMany(UserLog::class ,'loggable');
    }

    // public function type()
    // {
    //     return $this->belongsTo(Type::class, 'type_id');
    // }

    // public function interactions()
    // {
    //     return $this->hasMany(Interaction::class);
    // }

    // public function merchants()
    // {
    //     return $this->hasMany(Merchant::class);
    // }

    // public function register()
    // {
    //     return $this->hasOne(Register::class, 'user_id');
    // }

    // public function registers()
    // {
    //     return $this->hasMany(Register::class, 'user_id');
    // }

    // public function businesses()
    // {
    //     return $this->hasMany(Business::class, 'user_id');
    // }

    // public function addresses()
    // {
    //     return $this->morphMany(Address::class, 'addressable');
    // }

    // public function getLastLogin(): ?string
    // {
    //     return $this->last_login_at ? \Carbon\Carbon::parse($this->last_login_at)->diffForHumans() : 'Nunca';
    // }

    // public function approvedBy()
    // {
    //     return $this->belongsTo(Admin::class, 'approved_by');
    // }

    // public function blockedBy()
    // {
    //     return $this->belongsTo(Admin::class, 'blocked_by');
    // }

    // public function showSessionTypeNavigation()
    // {
    //     switch (session('type_navigation')) {
    //         case 'citizen':
    //             return 'Ciudadano';
    //         case 'merchant':
    //             return 'Comerciante';
    //         case 'accountant':
    //             return 'Contador';
    //         case 'contractor':
    //             return 'Contratista';
    //         case 'supplier':
    //             return 'Proveedor';
    //         case 'visitor':
    //             return 'Visitante';
    //         default:
    //             return 'Usuario';
    //     }
    // }

}
