<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Profile, Summary, Skill, Education, WorkHistory, Project};

class FrontendController extends Controller
{
    public function index()
    {
        $profiles = Profile::select('user_id', 'first_name', 'last_name', 'image', 'job_title', 'linkedin', 'city', 'state')
            ->get();
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
        return view('landing-page.resume', compact('profile'));
    }
    public function projects($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->firstOrFail();
        return view('landing-page.projects', compact('profile'));
    }
    public function contact($user_id)
    {
        $profile = Profile::where('user_id', $user_id)->firstOrFail();
        return view('landing-page.contact', compact('profile'));
    }

}
