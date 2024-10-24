<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Sprint;
use App\Models\Task;
use App\Services\PlanningService;


class PlanningController extends Controller
{
    public function index()
    {

        $tasks = Task::with('developer')->with('developer')->get();

        $developers = Developer::with('tasks')
            ->withSum('tasks', 'duration_for_developer')
            ->get();

        $sprints = Sprint::all();
        return view('planning.index', compact('tasks', 'developers', 'sprints'));
    }
    public function plan()
    {
        (new PlanningService())->plan();
        return redirect()->back()->with(['message' => __('Planned successfully')]);
    }
}
