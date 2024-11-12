<?php

namespace App\Http\Controllers;

use App\Models\WorkHistory;
use Illuminate\Http\Request;

class WorkHistoryController extends Controller
{
   
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'country' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:20',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable|string',
        ]);
    
        $work_history = WorkHistory::find($request->id) ?? new WorkHistory;
    
        $work_history->job_title = $request->job_title;
        $work_history->company = $request->company;
        $work_history->country = $request->country;
        $work_history->city = $request->city;
        $work_history->user_id = auth()->id();
        $work_history->start_date = $request->start_date;
        $work_history->end_date = $request->end_date;
        $work_history->description = $request->description;
        $work_history->save();
    
        return back()->with('success', $request->id ? 'Work history Store successfully.' : 'Work history created successfully.');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'country' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:20',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable|string',
        ]);
    
        $work_history = WorkHistory::find($id);
    
        if (!$work_history) {
            return back()->with('error', 'Work history not found.');
        }
    
        $work_history->job_title = $request->job_title;
        $work_history->company = $request->company;
        $work_history->country = $request->country;
        $work_history->city = $request->city;
        $work_history->start_date = $request->start_date;
        $work_history->end_date = $request->end_date;
        $work_history->description = $request->description;
    
        $work_history->save();
    
        return back()->with('success', 'Work history updated successfully.');
    }
}
