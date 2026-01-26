<?php

namespace App\Models;
use App\Models\AdminSession;
use App\Models\AdminStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
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
        'phone',
        'username',
        'password',
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

    public function sessions()
    {
        return $this->hasMany(AdminSession::class);
    }

    public function session()
    {
        return $this->hasOne(AdminSession::class)->latestOfMany();
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }

    // public function getLastLogin(): ?string
    // {
    //     return $this->last_login_at ? \Carbon\Carbon::parse($this->last_login_at)->diffForHumans() : 'Nunca';
    // }

    // public function getCreatedAt(): string
    // {
    //     return \Carbon\Carbon::parse($this->created_at)->format('d/m/Y H:i:s');
    // }

    // public function getUpdatedAt(): string
    // {
    //     return \Carbon\Carbon::parse($this->updated_at)->format('d/m/Y H:i:s');
    // }

    // public function getBlocked(): string
    // {
    //     return $this->blocked_at ? 'Si' : 'No';
    // }

    // public function getBlockedAt(): string
    // {
    //     return $this->blocked_at ? \Carbon\Carbon::parse($this->blocked_at)->format('d/m/Y') : '...';
    // }

}
