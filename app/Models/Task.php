<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'task_type_id',
        'taskable_id',
        'taskable_type',
    ];

    public function taskType()
    {
        return $this->belongsTo(TaskType::class);
    }

    public function taskable()
    {
        return $this->morphTo();
    }
}
