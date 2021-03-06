<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Task;
use App\Project;

class TaskController extends Controller
{
    public function index(Request $request, Project $project)
    {
        return view('tasks.index', [
            'project' => $project,
            'tasks' => $project->tasks,
        ]);
    }

    public function store(Request $request, Project $project)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'project_id' => $project->id,
        ]);

        return redirect('/projects/' . $project->id . '/tasks');
    }

    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/');
    }
}
