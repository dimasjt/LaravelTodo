<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Project;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        return view('projects.index', [
            'projects' => Project::all()
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $request->user()->projects()->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/');
    }
}
