<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function index()
    {
        return Inertia::render('Projects/All', [
            'projects' => Project::all(),
            'availableColor' => Project::getAvailableTextColors(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique(Project::class)
            ],
            'description' => [
                'required',
            ],
            'color' => [
                'required',
                'in:' . implode(',', Project::getAvailableTextColors())
            ]
        ]);


        $project = Project::create($request->only('title', 'description', 'color'));
        $project->addMediaFromRequest('feature_image')
        ->toMediaCollection('service');

        return redirect()->route('projects.index');
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique(Project::class)->ignore($project->id)
            ],
            'description' => [
                'required',
            ],
            'color' => [
                'required',
                'in:' . implode(',', Project::getAvailableTextColors())
            ]
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
