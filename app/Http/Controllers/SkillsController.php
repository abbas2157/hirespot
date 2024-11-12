<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'skills' => 'required|array',
            'skills.*' => 'required|string',
        ]);
    
        $skills = new Skill();
        $skills->user_id = auth()->id();
        $skills->skills = $request->skills;
        $skills->save();
    
        return back()->with('success', 'Skills created successfully.');
    }
  
    public function update(Request $request, $id)
    {
        $request->validate([
            'skills' => 'required|array',
            'skills.*' => 'required|string',
        ]);
    
        $skills = Skill::find($id);
        $skills->skills = $request->skills;
        $skills->save();
    
        return back()->with('success', 'Skills updated successfully.');
    }
}
