<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   
     public function store(Request $request)
     {
         // Validate the request
         $request->validate([
             'project_title' => 'required|string|max:255',
             'company' => 'required|string|max:255',
             'project_url' => 'nullable|url|max:255',
             'tools' => 'nullable|string|max:255', 
             'start_date' => 'nullable|date',
             'end_date' => 'nullable|date',
             'description' => 'nullable|string',
         ]);
     
         $project = Project::find($request->id) ?? new Project;
     
         $project->title = $request->project_title;
         $project->company = $request->company;
         $project->project_url = $request->project_url;
         $project->tools = $request->tools;
         $project->user_id = auth()->id();
         $project->start_date = $request->start_date;
         $project->end_date = $request->end_date;
         $project->description = $request->description;
     
         $project->save();
     
         return back()->with('success', $request->id ? 'Project added successfully.' : 'Project created successfully.');
     }
     

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'project_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'project_url' => 'nullable|url|max:255',
            'tools' => 'nullable|string|max:255', 
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable|string',
        ]);
    
        $project = Project::find($request->id) ?? new Project;
    
        $project->title = $request->project_title;
        $project->company = $request->company;
        $project->project_url = $request->project_url;
        $project->tools = $request->tools;
        $project->user_id = auth()->id();
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->description = $request->description;
    
        $project->save();
    
        return back()->with('success', $request->id ? 'Project added successfully.' : 'Project created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
