<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'service_id',
        'name',
        'phone',
        'status',
        'resolved_at',
        'closed_at',
        'created_by',
        'deleted_by',
        'is_deleted',
        'ip_address',
        'user_agent',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function messages()
    {
        return $this->hasMany(InteractionMessage::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeResolved($query)
    {
        return $query->where('status', 'resolved');
    }

    public function scopeClosed($query)
    {
        return $query->where('status', 'closed');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc')->take(5);
    }

    public function getTypeNameAttribute()
    {
        return match ($this->type) {
            'call' => 'Llamada',
            'message' => 'Mensaje',
            default => 'Otro',
        };
    }

    public function getStatusNameAttribute()
    {
        return match ($this->status) {
            'pending' => 'Pendiente',
            'in_progress' => 'En Progreso',
            'resolved' => 'Resuelto',
            'closed' => 'Cerrado',
            default => 'Desconocido',
        };
    }

    public function getStatusColorAttribute()
    {
        return match ($this->status) {
            'pending' => 'yellow',
            'in_progress' => 'blue',
            'resolved' => 'green',
            'closed' => 'red',
            default => 'default',
        };
    }

    public function countNotReadMessagesAdmin()
    {
        return $this->messages()->whereNull('admin_created_id')->whereNull('admin_read_id')->count();
    }

}
