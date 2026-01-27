<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'interaction_type_id',
        'service_id',
        'user_id',
    ];

    public function interactionType()
    {
        return $this->belongsTo(InteractionType::class, 'interaction_type_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function messages()
    {
        return $this->hasMany(InteractionMessage::class, 'interaction_id');
    }

    public function latestMessage()
    {
        return $this->hasOne(InteractionMessage::class, 'interaction_id')->latestOfMany();
    }
    
}
