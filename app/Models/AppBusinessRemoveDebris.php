<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessRemoveDebris extends Model
{
    protected $table = 'app_business_remove_debris';

    protected $fillable = [
        'description',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }
}
