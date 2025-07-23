<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'code',
        'phone',
        'address',
        'city',
        'postal_code',
        'date_of_birth',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getName()
    {
        return $this->user ? $this->user->name : $this->name; // Assuming 'name' is a column in the citizens table
    }

    public function getEmail()
    {
        return $this->user ? $this->user->email : $this->email; // Assuming 'email' is a column in the users table
    }
    public function getPhone()
    {
        return $this->user ? $this->user->phone : $this->phone; // Assuming 'phone' is a column in the users table
    }

    public function getStatus()
    {
        if ($this->user) {
            return $this->user->approved_at ? 'Approved' : 'Pending';
        } else {
            return 'Unknown';
        }
        
    }

    public function getCreatedAt()
    {
        return \Carbon\Carbon::parse($this->user ? $this->user->created_at : $this->created_at)->format('d/m/Y');
    }

    public function getLastLogin(): ?string
    {
        return \Carbon\Carbon::parse($this->user ? $this->user->last_login_at : null)->diffForHumans();
    }
}
