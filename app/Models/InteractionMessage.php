<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InteractionMessage extends Model
{
    protected $fillable = [
        'interaction_id',
        'message',
        'user_created_id',
        'user_read_id',
        'user_read_at',
        'admin_created_id',
        'admin_read_id',
        'admin_read_at',
        'ip_address',
        'user_agent',
    ];

    public function interaction()
    {
        return $this->belongsTo(Interaction::class);
    }

    public function adminCreated()
    {
        return $this->belongsTo(Admin::class, 'admin_created_id');
    }

    public function adminRead()
    {
        return $this->belongsTo(Admin::class, 'admin_read_id');
    }

    public function getMessageReadAdmin()
    {
        return $this->admin_read_id ? 'Leído' : 'No leído';
    }
    
    public function getMessageReadUser()
    {
        return $this->user_read_id ? 'Leído' : 'No leído';

    }
}
