<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::get();
        return response()->json([
            'messae' => 'success',
            'tasks' => $tasks
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required|date',
        ]);

        $task = Task::create($request->all());

        return response()->json([
            'message' => 'Task created successfully!',
            'task' => $task
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required|date',
        ]);
        $task = Task::find($id);
        $task->update($request->all());

        return response()->json([
            'message' => 'Task updated successfully!',
            'task' => $task
        ]);
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->json([
            'message' => 'Task deleted successfully!'
        ]);
    }
}
