<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDefault extends Model
{
    protected $fillable = [
        'user_id',
        'defaultable_type',
        'defaultable_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function defaultable()
    {
        return $this->morphTo();
    }

}
