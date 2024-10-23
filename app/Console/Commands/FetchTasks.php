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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        foreach (Provider::all() as $provider) {
            $taskFetchingManager = new TaskFetchingManager($provider);
            $taskFetchingManager->fetchTasks();
        }
    }
}
