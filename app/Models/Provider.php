<?php

namespace App\Models;

use App\Services\Provider1Fetcher;
use App\Services\TaskFetcherAbstract;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name',
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
