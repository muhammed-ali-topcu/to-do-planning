<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'estimated_duration',
        'difficulty',
        'developer_id',
        'provider_id',
        'custome_id',
        'score',
        'duration_for_developer',
        'sprint_id',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function (self $task) {
            $task->score = $task->difficulty * $task->estimated_duration;
        });
        static::updating(function (self $task) {
            $task->score = $task->difficulty * $task->estimated_duration;
        });
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }
    public function scopeUnassigned($query)
    {
        return $query->where('developer_id', null);
    }
}
