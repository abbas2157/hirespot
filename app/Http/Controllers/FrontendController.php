<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Summary;
use App\Models\Skill;
use App\Models\Education;
use App\Models\WorkHistory;
use App\Models\Project;

class FrontendController extends Controller
{
    public function index()
    {
        $profiles = Profile::select('user_id', 'first_name', 'last_name', 'image', 'job_title', 'linkedin', 'city', 'state')
            ->get();
        return view('frontend.index', compact('profiles'));
    }    

    public function show($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->firstOrFail();
        $summary = Summary::where('user_id', $user_id)->first();
        $skills = Skill::where('user_id', $user_id)->first();
        $educations = Education::where('user_id', $user_id)->get();
        $workHistories = WorkHistory::where('user_id', $user_id)->get();
        $projects = Project::where('user_id', $user_id)->get();

        $skills = $skills ? $skills->skills : [];
        
        return view('frontend.details', compact('profile', 'projects', 'summary', 'skills', 'educations', 'workHistories'));
    }
}
