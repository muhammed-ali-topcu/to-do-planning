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


    public function getAvailableScore(Sprint $sprint)
    {
        return ($sprint->hours * $this->speed) - $this->tasks()->where('sprint_id', $sprint->id)->sum('score');
    }
}
