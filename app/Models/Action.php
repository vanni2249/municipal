<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'actionable_type',
        'actionable_id',
        'action_category_id',
        'description',
        'created_by',
        'register_id',
        'admin_id',
    ];

    public function actionable()
    {
        return $this->morphTo();
    }

    public function category()
    {
        return $this->belongsTo(ActionCategory::class, 'action_category_id');
    }

    public function debris()
    {
        return $this->hasMany(Debris::class);
    }

    public function register()
    {
        return $this->belongsTo(Register::class);
    }   

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
