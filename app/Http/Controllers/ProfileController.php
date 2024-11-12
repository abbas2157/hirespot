<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Education;
use App\Models\Reference;
use App\Models\Summary;
use App\Models\WorkHistory;
use App\Models\Skill;
use App\Models\Hobby;
use App\Models\Project;

class ProfileController extends Controller
{
    
    public function index()
    {
        $profiles = Profile::all();
        $educations = Education::all();
        $references = Reference::all();
        $summary = Summary::first();
        $work_histories = WorkHistory::all();
        $skills = Skill::all();
        $hobby = Hobby::all();
        $projects = Project::all();

        return view('profiles.index', compact('profiles', 'educations', 'references', 'summary','work_histories', 'skills', 'hobby', 'projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'nullable|string|max:20',
            'experience' => 'nullable|string|max:20',
            'email' => 'required|email|unique:profiles,email,' . $request->id, 
            'job_title' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'current_company' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'linkedin' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'email.required' => 'Email is required.',
            'email.unique' => 'This email is already associated with another profile.',
        ]);
    
        $profile = Profile::find($request->id) ?? new Profile;
    
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->email = $request->email;
        $profile->mobile = $request->mobile;
        $profile->experience = $request->experience;
        $profile->job_title = $request->job_title;
        $profile->state = $request->state;
        $profile->current_company = $request->current_company;
        $profile->city = $request->city;
        $profile->user_id = auth()->id();
        $profile->linkedin = $request->linkedin;
    
        if ($request->hasFile('image')) {
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }
            $profile->image = $request->file('image')->store('profiles', 'public');
        }
    
        // Save the profile
        $profile->save();
    
        return back()->with('success', $request->id ? 'Profile updated successfully.' : 'Profile created successfully.');
    }
    
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'nullable|string|max:20',
            'experience' => 'nullable|string|max:20',
            'email' => 'required|email|unique:profiles,email,' . $id,
            'job_title' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'current_company' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'linkedin' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $profile = Profile::findOrFail($id); 
    
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->email = $request->email;
        $profile->mobile = $request->mobile;
        $profile->experience = $request->experience;
        $profile->job_title = $request->job_title;
        $profile->state = $request->state;
        $profile->current_company = $request->current_company;
        $profile->city = $request->city;
        $profile->user_id = auth()->id();
        $profile->linkedin = $request->linkedin;
    
        if ($request->hasFile('image')) {
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }
            $profile->image = $request->file('image')->store('profiles', 'public');
        }

        $profile->save();
        return back()->with('success', 'Profile updated successfully.');
    }

    public function storeEducation(Request $request)
    {
        $request->validate([
            'degree_title' => 'nullable|string|max:255',
            'year_completion' => 'nullable|integer',
            'institute' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'cgpa_percentage' => 'nullable|numeric',
            'is_percentage' => 'nullable|boolean',
        ]);
        $userId = auth()->id();
        Education::create([
            'degree_title' => $request->degree_title,
            'year_completion' => $request->year_completion,
            'institute' => $request->institute,
            'city' => $request->city,
            'user_id' => $userId,
            'cgpa_percentage' => $request->cgpa_percentage,
            'is_percentage' => $request->is_percentage,
        ]);

        return redirect()->back()->with('success', 'Education added successfully.');
    }

    public function updateEducation(Request $request, $id)
    {
        $request->validate([
            'degree_title' => 'nullable|string|max:255',
            'year_completion' => 'nullable|integer',
            'institute' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'cgpa_percentage' => 'nullable|numeric',
            'is_percentage' => 'nullable|boolean',
        ]);

        $education = Education::findOrFail($id);
        $education->update([
            'degree_title' => $request->degree_title,
            'year_completion' => $request->year_completion,
            'institute' => $request->institute,
            'city' => $request->city,
            'cgpa_percentage' => $request->cgpa_percentage,
            'is_percentage' => $request->is_percentage,
        ]);

        return redirect()->back()->with('success', 'Education updated successfully.');
    }
   }
