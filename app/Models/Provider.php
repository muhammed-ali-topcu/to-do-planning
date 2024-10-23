<?php

namespace App\Models;

use App\Services\Provider1Fetcher;
use App\Services\TaskFetcherAbstract;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name',

        'fetcher_class',
        'key_for_custome_id',
        'key_for_defficulty',
        'key_for_estimated_duration',
        'url',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getFetcher(): TaskFetcherAbstract
    {
        return new Provider1Fetcher;
    }
}
