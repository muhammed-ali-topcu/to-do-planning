<?php

namespace App\Services;

use App\Models\Developer;
use App\Models\Provider;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class PlanningService
{
    const WEEK_HOURS = 45;

    public function plan()
    {

        $tasks = Task::query()
            ->orderBy('score', 'desc')
            ->get();

        $this->unassignAllTasks();
        foreach ($tasks as $task) {
            $developer = $this->findedAppropriateDeveloper($task);

            if ($developer) {
                $this->assignTask($task, $developer);
            }
        }

        return $tasks;
    }


    private function findedAppropriateDeveloper(Task $task): ?Developer
    {
        $developers = Developer::with('tasks')->get();

        $developers = $developers->map(function (Developer $developer) {
            $developer->availlable_score = $developer->getAvailableScore();
            return $developer;
        });


        return $developers->where('availlable_score', '>=', $task->score)
            ->sortBy('availlable_score')->first();
    }

    private function unassignAllTasks()
    {
        Task::query()->update(['developer_id' => null, 'duration_for_developer' => null]);
    }

    private function assignTask(Task $task, Developer $developer)
    {
        $task->developer_id = $developer->id;
        $task->duration_for_developer = $task->difficulty * $task->estimated_duration / $developer->speed;
        $task->save();
    }
}
