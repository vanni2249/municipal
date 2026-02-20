<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Position extends Model
{
    use HasTranslations;

    public array $translatable = ['name', 'description'];
    protected $fillable = [
        'department_id',
        'name',
        'description',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
