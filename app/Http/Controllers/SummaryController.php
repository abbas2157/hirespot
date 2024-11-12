<?php

namespace App\Http\Controllers;
use App\Models\Summary;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SummaryController extends Controller
{

    public function index()
    {
        $summary = Summary::first();
        return view('profiles.index', compact('summary'));
    }

    public function store(Request $request)
    {
        if (Summary::exists()) {
            return redirect()->back()->with('error', 'Summary already exists.');
        }
        
        $request->validate([
            'summary' => 'required|string',
        ]);
    
        Summary::create([
            'user_id' => Auth::id(),
            'summary' => $request->summary,
        ]);        return redirect()->back()->with('success', 'Summary added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'summary' => 'nullable|string',
        ]);
        $summary = Summary::findOrFail($id); 
        $summary->summary = $request->summary;
        $summary->user_id = Auth::id(); 
    

        $summary->save();
        return back()->with('success', 'Summary updated successfully.');
    }
}
