<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'interaction_type_id',
        'interactionable_type',
        'interactionable_id',
        'account_id',
        'business_id',
        'user_id',
    ];

    public function interactionType()
    {
        return $this->belongsTo(InteractionType::class, 'interaction_type_id');
    }

    public function interactionable()
    {
        return $this->morphTo();
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
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
