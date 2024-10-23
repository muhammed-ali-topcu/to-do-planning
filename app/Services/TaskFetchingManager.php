<?php

namespace App\Services;

use App\Models\Provider;
use App\Models\Task;


class TaskFetchingManager
{

    private TaskFetcherAbstract $taskFetcher;

    private Provider $provider;

    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
        $this->taskFetcher = $this->provider->getFetcher();
    }



    public function fetchTasks()
    {

        $tasks = $this->taskFetcher->execute();
        $this->saveTasks($tasks);
    }
    private function saveTasks($tasks)
    {
        foreach ($tasks as $task) {
            Task::updateOrCreate([
                'custome_id' => $task['custome_id'],
                'provider_id' => $this->provider->id
            ], [
                'estimated_duration' => $task['estimated_duration'],
                'difficulty' => $task['difficulty'],
            ]);
        }
    }
}
