<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Profile, Summary, Skill, Education, WorkHistory, Project};

class FrontendController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('homepage.index', compact('profiles'));
    }

    public function show($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->firstOrFail();
        return view('landing-page.index', compact('profile'));
    }
    public function resume($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->firstOrFail();
        $workHistory = WorkHistory::where('user_id', $user_id)->get();
        $education = Education::where('user_id', $user_id)->get();
        $skills = Skill::where('user_id', $user_id)->first();
        return view('landing-page.resume', compact('profile', 'workHistory', 'education', 'skills'));
    }
    public function projects($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->firstOrFail();
        $projects = Project::where('user_id', $user_id)->get();
        return view('landing-page.projects', compact('profile','projects'));
    }
    public function contact($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->firstOrFail();
        return view('landing-page.contact', compact('profile'));
    }
}
