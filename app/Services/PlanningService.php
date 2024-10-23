<?php

namespace App\Services;

use App\Models\Developer;
use App\Models\Sprint;
use App\Models\Task;

class PlanningService
{
    const WEEK_HOURS = 45;

    public function plan()
    {
        $this->unassignAllTasks();

        do {
            $tasks = Task::query()
                ->orderBy('score', 'desc')
                ->unassigned()
                ->get();
            $sprint = Sprint::create(['hours' => self::WEEK_HOURS]);

            foreach ($tasks as $task) {
                $developer = $this->findedAppropriateDeveloper($task, $sprint);

                if ($developer) {
                    $this->assignTask($task, $developer, $sprint);
                }
            }
        } while (Task::query()->unassigned()->count() > 0);

        return $tasks;
    }


    private function findedAppropriateDeveloper(Task $task, Sprint $sprint): ?Developer
    {
        $developers = Developer::with('tasks')->get();

        $developers = $developers->map(function (Developer $developer) use ($sprint) {
            $developer->availlable_score = $developer->getAvailableScore($sprint);
            return $developer;
        });


        return $developers->where('availlable_score', '>=', $task->score)
            ->sortBy('availlable_score')->first();
    }

    private function unassignAllTasks()
    {
        Task::query()->update(['developer_id' => null, 'duration_for_developer' => null, 'sprint_id' => null]);
        Sprint::truncate();
    }

    private function assignTask(Task $task, Developer $developer, Sprint $sprint)
    {
        $task->developer_id = $developer->id;
        $task->duration_for_developer = $task->score / $developer->speed;
        $task->sprint_id = $sprint->id;
        $task->save();
    }
}
