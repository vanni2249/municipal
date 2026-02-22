<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPosition extends Model
{
    protected $table = 'admin_position';

    protected $fillable = [
        'admin_id',
        'position_id',
        'assigned_at',
        'removed_at',
        'is_active',
        'is_default',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
