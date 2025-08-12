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
        'user_id',
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
}
