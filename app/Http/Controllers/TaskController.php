<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $currentDate = date('Y-m-d');

        $tasks = Task::get()->count();
        $completed = Task::where('completed', 1)->get()->count();

        $todays = Task::where('due_date', $currentDate)->get();
        $tommorows = Task::where('due_date', date('Y-m-d', strtotime('+1 day')))->get();

        $tasksGroupedByDate = Task::get()->groupBy(function ($task) {
            return $task->due_date->format('Y-m-d');
        });

        return view('dashboard', compact('tasks', 'completed','todays', 'tommorows', 'tasksGroupedByDate'));
    }
}
