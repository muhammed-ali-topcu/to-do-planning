<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name',
        'fetcher_class',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
