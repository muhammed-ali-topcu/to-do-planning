<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'estimated_duration',
        'difficullty',
        'developer_id',
        'provider_id',
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
