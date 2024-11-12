<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobby;

class HobbyController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'hobby' => 'required|array',
            'hobby.*' => 'required|string',
        ]);
        $hobby = new Hobby();
        $hobby->hobby = $request->hobby;
        $hobby->user_id = auth()->id();
        $hobby->save();
    
        return back()->with('success', 'Hobby created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hobby' => 'required|array',
            'hobby.*' => 'required|string',
        ]);
    
        $hobby = Hobby::find($id);
        $hobby->hobby = $request->hobby;
        $hobby->user_id = auth()->id();
        $hobby->save();
    
        return back()->with('success', 'Hobby updated successfully.');
    }
}
