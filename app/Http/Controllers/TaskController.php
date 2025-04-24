<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function add(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
        ]);

        $task = Task::create($validated);
        return response()->json($task);
    }

    public function markCompleted($id)
    {
        $task = Task::findOrFail($id);
        $task->update(['is_completed' => true]);
        return response()->json($task);
    }

    public function pendingTasks()
    {
        $tasks = Task::where('is_completed', false)->get();
        return response()->json($tasks);
    }
}

