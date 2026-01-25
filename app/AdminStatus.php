<?php

namespace App;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class AdminStatus extends Model
{
    protected $fillable = [
        'admin_id',
        'admin_status_type_id',
        'changed_by',
        'reason',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function statusType()
    {
        return $this->belongsTo(AdminStatusType::class, 'admin_status_type_id');
    }
}
