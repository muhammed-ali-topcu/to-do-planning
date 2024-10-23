<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Task;
use App\Services\PlanningService;
use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function index()
    {
        (new PlanningService())->plan();

        $tasks=Task::with('developer')->with('developer')->get();

        $developers = Developer::with('tasks')
        ->withSum('tasks', 'duration_for_developer')
        ->get();
        return view('planning.index',compact('tasks','developers'));
    }
}
