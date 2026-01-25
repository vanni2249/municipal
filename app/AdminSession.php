<?php

namespace App;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class AdminSession extends Model
{
    protected $fillable = [
        'admin_id',
        'session_token',
        'device_info',
        'platform',
        'browser',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
