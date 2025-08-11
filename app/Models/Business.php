<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'business_category_id',
        'name',
        'code',
        'merchant_number',
        'register_id',
        'user_id',
    ];

    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class);
    }

    public function register()
    {
        return $this->belongsTo(Register::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
