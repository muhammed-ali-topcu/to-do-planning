<?php

namespace App\Services;

use App\Models\Developer;
use App\Models\Provider;
use App\Models\Task;


abstract class  TaskFetcherAbstract
{
    protected $endpoint;
    protected $propertyNameForCustomId;
    protected $propertyNameForEstimatedDuration;
    protected $propertyNameForDefficulty;

    public abstract function execute():array;


    protected function formatTasks($leedTasks): array
    {
        $tasks = [];
        foreach ($leedTasks as $leedTask) {
            $tasks[] = [
                'custome_id' => $leedTask[$this->propertyNameForCustomId],
                'estimated_duration' => $leedTask[$this->propertyNameForEstimatedDuration],
                'difficulty' => $leedTask[$this->propertyNameForDefficulty],
            ];
        }
        return $tasks;
    }
}
