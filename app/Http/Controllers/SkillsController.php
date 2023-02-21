<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SkillsController extends Controller
{
    public function index()
    {
        return Inertia::render('Skills/All', [
            'skills' => Skill::all(),
            'availableColors' => Skill::getAvailableBackgroundColors()
        ]);

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => [
                'required',
                'max:255',
                Rule::unique(Skill::class)
            ],
            'color' => [
                'required',
                'in:' . implode(',' , Skill::getAvailableBackgroundColors())
            ]
        ]);

        $skill = Skill::create($request->all());
        $skill->addMediaFromRequest('feature_image')
        ->toMediaCollection('service');

        return redirect()->route('skills.index');
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => [
                'required',
                'max:255',
                Rule::unique(Skill::class)->ignore($skill->id)
            ],
            'color' => [
                'required',
                'in:' . implode(',' , Skill::getAvailableBackgroundColors())
            ]
        ]);

        $skill->update($request->all());

        if ($request->hasFile('feature_image')) {
            $skill->media()->delete();
            $skill->addMediaFromRequest('feature_image')
            ->toMediaCollection();
            // $popup->addMedia($file)->toMediaCollection('popup-icons');
        }


        return redirect()->route('skills.index');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index');
    }
}
