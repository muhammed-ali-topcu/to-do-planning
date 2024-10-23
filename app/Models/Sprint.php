<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    protected $fillable = [
        'hours',
    ];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
