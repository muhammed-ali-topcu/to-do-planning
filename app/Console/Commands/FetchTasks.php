<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Provider;
use App\Services\TaskFetchingManager;

class FetshTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tasks:fetch {providerId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fetch tasks form provider ';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $providerId = $this->argument('providerId');
        $provider = Provider::findOrFail($providerId);

        $taskFetchingManager = new TaskFetchingManager($provider);
        $taskFetchingManager->fetchTasks();
    }
}
