<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessRemoveTrash extends Model
{
    protected $table = 'app_business_remove_trashes';

    protected $fillable = [
        'description',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }
}
