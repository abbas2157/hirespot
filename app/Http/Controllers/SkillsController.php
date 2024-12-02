<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{

    public function index()
    {
        $skills = Auth::user()->skills;
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        $allSkills = Skill::all();
        return view('skills.create', compact('allSkills'));
    }
    public function search(Request $request)
    {
        $search = $request->get('query', '');

        $skills = Skill::where('title', 'LIKE', '%' . $search . '%')->get();

        return response()->json($skills);
    }
    public function store(Request $request)
    {
        $request->validate([
            'skill' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $skill = Skill::firstOrCreate(['title' => $request->skill]);

        $user->skills()->syncWithoutDetaching($skill->id);

        return redirect()->route('skills.index')->with('status', 'Skill added successfully!');
    }

    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'skill' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $existingSkill = Skill::firstOrCreate(['title' => $request->skill]);
        $user->skills()->syncWithoutDetaching([$existingSkill->id]);
        if ($skill->id !== $existingSkill->id) {
            $user->skills()->detach($skill->id);
        }
        return redirect()->route('skills.index')->with('status', 'Skill updated successfully!');
    }

    public function destroy(Skill $skill)
    {
        $user = Auth::user();

        $user->skills()->detach($skill->id);

        return redirect()->route('skills.index')->with('status', 'Skill removed successfully!');
    }
}
