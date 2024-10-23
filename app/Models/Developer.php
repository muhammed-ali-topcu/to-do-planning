<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'speed',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
