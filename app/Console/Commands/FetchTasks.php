<?php

namespace App\Console\Commands;

use App\Models\Provider;
use App\Services\TaskFetchingManager;
use Illuminate\Console\Command;

class FetchTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch-tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fetch tasks for all providers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (Provider::all() as $provider) {
            $this->info("Fetching tasks for provider: " . $provider->name);
            $taskFetchingManager = new TaskFetchingManager($provider);
            $taskFetchingManager->fetchTasks();
            $this->info("Finished fetching tasks for provider: " . $provider->name);
        }
        $this->info("Finished fetching all tasks");
    }
}
