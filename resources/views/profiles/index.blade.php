@extends('layouts.master')
@section('content')

    <style>
        .social-icons a {
            margin: 0 5px;
            color: #333;
            font-size: 20px;
            text-decoration: none;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Profile Section */

        .profile-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile-info {
            flex-grow: 1;
        }

        .profile-name {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .profile-title {
            font-size: 18px;
            color: #666;
        }

        /* Contact Information Section */

        .contact-info-section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .contact-info-item {
            margin-bottom: 20px;
            width: 50%;
        }

        .contact-info-label {
            font-weight: bold;
            margin-right: 10px;
        }

        /* Skills Section */

        .skills-section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .skills-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .skills-list-item {
            margin-bottom: 10px;
        }

        .skills-list-item::before {
            content: "\2022";
            font-weight: bold;
            font-size: 18px;
            color: #333;
            margin-right: 10px;
        }

        /* Experience Section */

        .experience-section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .experience-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .experience-list-item {
            margin-bottom: 20px;
        }

        .experience-list-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .experience-list-item-title {
            font-weight: bold;
            font-size: 18px;
        }

        .experience-list-item-company {
            font-size: 16px;
            color: #666;
        }

        .experience-list-item-duration {
            font-size: 16px;
            color: #666;
        }

        .experience-list-item-description {
            font-size: 16px;
            color: #666;
        }

        /* Education Section */

        .education-section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .education-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .education-list-item {
            margin-bottom: 20px;
        }

        .education-list-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .education-list-item-title {
            font-weight: bold;
            font-size: 18px;
        }

        .education-list-item-institution {
            font-size: 16px;
            color: #666;
        }

        .education-list-item-duration {
            font-size: 16px;
            color: #666;
        }

        .education-list-item-description {
            font-size: 16px;
            color: #666;
        }

        /* Projects Section */

        .projects-section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .projects-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .projects-list-item {
            margin-bottom: 20px;
        }

        .projects-list-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .projects-list-item-title {
            font-weight: bold;
            font-size: 18px;
        }

        .projects-list-item-description {
            font-size: 16px;
            color: #666;
        }

        /* Modal Styles */

        .modal-content {
            padding: 20px;
        }

        

        /* Modal Styles */

        .modal-dialog {
            max-width: 800px;
            margin: 40px auto;
        }

        .modal-content {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            /* background-color: #f0f0f0; */
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .modal-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .modal-footer .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        .modal-footer .btn-primary {
            background-color: #4CAF50;
            color: #fff;
        }

        .modal-footer .btn-secondary {
            background-color: #ccc;
            color: #333;
        }

        .custom-shadow {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .hire_spot_img{
            height: 100px;
            width: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }

        .tab-card {
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            transition: 0.3s;
        }
        .tab-card:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .tab-card img {
            width: 50px;
            margin-bottom: 10px;
        }
    </style>

<div class="container mt-5">
    <!-- Tab Section -->
    <div class="row mb-4 mt-5 text-center">
        <div class="col-md-3"></div>
        <div class="col-md-2 col-6 mt-5">
            <div class="tab-card shadow-sm rounded p-3" data-bs-toggle="modal" data-bs-target="#summaryModal">
                <img src="{{ url('public/assets/img/summary.png')}}" alt="Summary Icon" class="img-fluid mb-2" style="width: 50px; height: 50px;">
                <h5 class="card-title">Summary</h5>
                <a href="#" class="text-primary"><strong>+ Add</strong></a>
            </div>
        </div>
        <div class="col-md-2 col-6 mt-5">
            <div class="tab-card shadow-sm rounded p-3" data-bs-toggle="modal" data-bs-target="#experienceModal">
                <img src="{{ url('public/assets/img/brifcase.png')}}" alt="Work History Icon" class="img-fluid mb-2" style="width: 50px; height: 50px;">
                <h5 class="card-title">Work History</h5>
                <a href="#" class="text-primary"><strong>+ Add</strong></a>
            </div>
        </div>
        <div class="col-md-2 col-6 mt-5">
            <div class="tab-card shadow-sm rounded p-3" data-bs-toggle="modal" data-bs-target="#educationModal">
                <img src="{{ url('public/assets/img/education.png')}}" alt="Education Icon" class="img-fluid mb-2" style="width: 50px; height: 50px;">
                <h5 class="card-title">Education</h5>
                <a href="#" class="text-primary"><strong>+ Add</strong></a>
            </div>
        </div>
        <div class="col-md-2 col-6 mt-5">
            <div class="tab-card shadow-sm rounded p-3" data-bs-toggle="modal" data-bs-target="#skillsModal">
                <img src="{{ url('public/assets/img/skills.png')}}" alt="Skills Icon" class="img-fluid mb-2" style="width: 50px; height: 50px;">
                <h5 class="card-title">Skills</h5>
                <a href="#" class="text-primary"><strong>+ Add</strong></a>
            </div>
        </div>
    </div>    

    <div class="row">
        <!-- Left Side Profile Section -->
        <div class="col-md-3 mt-5">
            <div class="card text-center shadow-lg">
                @if($profiles->isEmpty())
                        <img class="rounded-circle shadow-4-strong hire_spot_img" alt="avatar2" src="{{ url('public/assets/img/hire_spot.jfif') }}" />
                        @else
                            @foreach($profiles as $profile)
                            @if($profile->image)
                            <img src="{{ asset('public/storage/' . $profile->image) }}" alt="Profile Image" width="100" height="100" class="img-thumbnail mx-auto d-block rounded-circle">
                        @else
                            <img src="{{ asset('default-avatar.png') }}" alt="Default Avatar" width="100" height="100" class="img-thumbnail">
                        @endif
                    @endforeach
                @endif

                @if($profiles->isEmpty())
                    <div class="card-body">
                        <h5 class="card-title">Afaq</h5>
                        <p>Pakistan</p>
                        <h6>Software Engineer</h6>
                        <p>Innovabe.</p>

                        <div class="social-icons">
                            <a href="#" class="btn btn-link"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="btn btn-link"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn btn-link"><i class="fab fa-twitter"></i></a>
                        </div>
                        
                        <!-- Button to open modal for adding a new profile -->
                        <button class="btn btn-primary" data-toggle="modal" data-target="#profileModal"> Add Profile </button>
                    </div>
                @else
                    @foreach($profiles as $profile)
                        <div class="card-body">
                            <h5 class="card-title">{{ $profile->first_name }} {{ $profile->last_name }}</h5>
                            <p>{{ $profile->city }}, {{ $profile->state }}</p>
                            <h6>{{ $profile->job_title }}</h6>
                            <p>{{ $profile->current_company }}</p>
                    
                            <div class="social-icons">
                                <a href="{{ $profile->linkedin }}" class="btn btn-link"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="btn btn-link"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-link"><i class="fab fa-twitter"></i></a>
                            </div>
                            
                            <!-- Button to open modal for editing the profile -->
                            <button class="btn btn-primary" data-toggle="modal" data-target="#profileModal" 
                                    data-id="{{ $profile->id }}"
                                    data-first-name="{{ $profile->first_name }}"
                                    data-last-name="{{ $profile->last_name }}"
                                    data-email="{{ $profile->email }}"
                                    data-mobile="{{ $profile->mobile }}"
                                    data-state="{{ $profile->state }}"
                                    data-city="{{ $profile->city }}"
                                    data-experience="{{ $profile->experience }}"
                                    data-job-title="{{ $profile->job_title }}"
                                    data-current-company="{{ $profile->current_company }}"
                                    data-linkedin="{{ $profile->linkedin }}"
                                    data-image="{{ $profile->image }}"> Edit Profile
                                </button>
                        </div>
                    @endforeach
                @endif

                <!-- Basic Information Section -->
                <div class="mt-3">
                    <h3>Basic Information</h3>
                    <p><strong>Address:</strong> {{ $profile->city ?? 'City' }}, {{ $profile->state ?? 'State' }}</p>
                    <p><strong>Phone:</strong> {{ $profile->mobile ?? 'Phone Number' }}</p>
                </div>

                <!-- Experience Section -->
                <div class="mt-3">
                    <h3>
                        Experience
                    </h3>
                    <p>{{ $profile->experience ?? 'N/A' }}</p>
                </div>

                <div class="mt-3">
                    <h3>
                        Education
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#educationModal">
                            + Add
                        </button>
                    </h3>
                
                    <!-- Loop through added education entries -->
                    @if($educations->isEmpty())
                        <div class="card-body">
                            <h5 class="card-title">Sample Degree</h5>
                            <p>Sample Institute</p>
                            <h6>Year of Completion: 2024</h6>
                            <p>City: Sample City</p>
                            <p>Grade Type: CGPA</p>
                            <p>Score: 4.0</p>
                
                            <!-- Button to open modal for adding new education -->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#educationModal">Add Education</button>
                        </div>
                    @else
                        @foreach($educations as $education)
                            <div class="card-body">
                                <h5 class="card-title">{{ $education->degree_title }}</h5>
                                <p>{{ $education->institute }}</p>
                                <h6>Year of Completion: {{ $education->year_completion }}</h6>
                                <p>City: {{ $education->city }}</p>
                                <p>Grade Type: {{ $education->is_percentage ? 'Percentage' : 'CGPA' }}</p>
                                <p>Score: {{ $education->cgpa_percentage }}</p>
                                
                                <!-- Button to open modal for editing education -->
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#educationModal"
                                    data-id="{{ $education->id }}"
                                    data-degree-title="{{ $education->degree_title }}"
                                    data-year-completion="{{ $education->year_completion }}"
                                    data-institute="{{ $education->institute }}"
                                    data-city="{{ $education->city }}"
                                    data-cgpa-percentage="{{ $education->cgpa_percentage }}"
                                    data-is-percentage="{{ $education->is_percentage }}">Edit Education</button>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="mt-5 mb-5">
                    <h4>References
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#referenceModal">
                            + Add Reference
                        </button>

                    </h4>
                </div>
                @if($references->isEmpty())
                    <div class="card-body">
                        <h5 class="card-title">No References Available</h5>
                        <p>You haven't added any references yet.</p>

                        <!-- Button to open modal for adding a new reference -->
                    </div>
                @else
                    @foreach($references as $reference)
                        <div class="card-body">
                            <h5 class="card-title">{{ $reference->name }}</h5>
                            <p>{{ $reference->company }}</p>
                            <h6>{{ $reference->email }}</h6>
                            <p>{{ $reference->phone }}</p>
                            <!-- Button to open modal for editing the reference -->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referenceModal" 
                                    data-id="{{ $reference->id }}"
                                    data-name="{{ $reference->name }}"
                                    data-company="{{ $reference->company }}"
                                    data-email="{{ $reference->email }}"
                                    data-phone="{{ $reference->phone }}"> 
                                Edit Reference
                            </button>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>

        <!--Start Profile Modal -->
        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="profileModalLabel">{{ isset($profile) ? 'Edit Profile' : 'Add
                            Profile' }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ isset($profile) ? route('profiles.update', $profile->id) : route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($profile))
                            @method('PUT')
                        @endif
                        <input type="hidden" name="id" value="{{ $profile->id ?? '' }}">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name"><b>First Name</b></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $profile->first_name ?? '' }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="mobile"><b>Mobile</b></label>
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            value="{{ $profile->mobile ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><b>Email</b></label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ $profile->email ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="state"><b>State</b></label>
                                        <input type="text" class="form-control" id="state" name="state"
                                            value="{{ $profile->state ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="city"><b>City</b></label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            value="{{ $profile->city ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name"><b>Last Name</b></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            value="{{ $profile->last_name ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="experience"><b>Experience</b></label>
                                        <input type="text" class="form-control" id="experience" name="experience"
                                            value="{{ $profile->experience ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="job_title"><b>Job Title</b></label>
                                        <input type="text" class="form-control" id="job_title" name="job_title"
                                            value="{{ $profile->job_title ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="current_company"><b>Current Company</b></label>
                                        <input type="text" class="form-control" id="current_company"
                                            name="current_company" value="{{ $profile->current_company ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="linkedin"><b>LinkedIn Profile</b></label>
                                        <input type="url" class="form-control" id="linkedin" name="linkedin"
                                            value="{{ $profile->linkedin ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="profileImage">Profile Image</label>
                                        <input type="file" class="form-control" id="profileImage" name="image" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Profile Modal -->

        <!--Start Education Modal -->
        @include('educations.index')
        <!--End Education Modal -->

        <!-- Start Reference Modal -->
        @include('references.index')
        <!--End Reference Modal -->

        <!-- Right Side Content Section -->
        <div class="col-md-9 mt-5">
            <div class="row">
            <!-- Summary Section -->
            <div class="col-md-12 mt-3">
                <div class="card shadow-sm border-0 rounded-lg p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="fw-bold text-primary mb-0">Professional Summary</h3>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#summaryModal">Add/Edit</button>
                    </div>
                    
                    <div id="summaryText" class="mt-3">
                        @if(!$summary)
                            <p class="text-muted">No summary added yet. Click "Add/Edit" to get started.</p>
                        @else
                            <div class="card-body">
                                <p>{{ $summary->summary }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
             
            <!--Start Summary Edit Modal -->
            @include('summary.index')
            <!--End Summary Edit Modal -->  

                <!-- Work History Section -->
                <div class="col-md-8 mt-3">
                    <div class="section p-4 border-0 rounded shadow-lg bg-light">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="mb-0 fw-bold text-primary">Work History</h3>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#experienceModal" onclick="clearForm()">
                                <i class="bi bi-plus-lg me-1"></i>Add Experience
                            </button>
                        </div>
                
                        @if($work_histories->isEmpty())
                            <div class="text-muted text-center py-4">
                                <i class="bi bi-briefcase-fill" style="font-size: 3rem; color: #ced4da;"></i>
                                <p class="mt-2">No work history added. Click "Add Experience" to get started.</p>
                            </div>
                        @else
                            @foreach($work_histories as $work_history)
                                <div class="work-history-card p-4 mb-3 bg-white rounded shadow-sm">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="mb-1 fw-semibold" style="color: #000;">{{ $work_history->job_title }}</h5>
                                        <button type="button" class="btn btn-outline-primary btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#experienceModal" 
                                            onclick="editExperience({{ $work_history }})">Edit</button>
                                    </div>
                                    <p class="mb-1" style="color: #000;"><strong>{{ $work_history->company }}</strong> &bull; {{ $work_history->country }}, {{ $work_history->city }}</p>
                                    <p class="mb-1" style="color: #000;">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $work_history->start_date }} - {{ $work_history->end_date ?? 'Present' }}
                                    </p>
                                    <p class="mt-3" style="color: #000; line-height: 1.6;">{{ $work_history->description }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                
                <!--Skills -->
                <div class="col-md-4 mt-3">
                    <div class="card shadow-sm border-0 rounded-lg p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="fw-bold text-primary mb-0">Skills</h4>
                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#skillsModal">+ Add/Edit</button>
                        </div>
                
                        <div id="skillsList" class="mt-3">
                            @if($skills->isEmpty())
                                <p class="text-muted">No skills added yet. Click "Add/Edit" to get started.</p>
                            @else
                                @foreach($skills as $skill)
                                    @foreach($skill->skills as $individualSkill)
                                        <span class="badge bg-primary text-white me-1 mb-2 p-2"  style="font-size: 13px">{{ $individualSkill }}</span>
                                    @endforeach
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-8 mt-3">
                        <div class="section p-4 border-0 rounded shadow-lg bg-light">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="mb-0 fw-bold text-primary">My Projects</h3>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#projectModal" onclick="clearForm()">
                                    <i class="bi bi-plus-lg me-1"></i>Add Project
                                </button>
                            </div>
                    
                            @if($projects->isEmpty())
                                <div class="text-muted text-center py-4">
                                    <i class="bi bi-briefcase-fill" style="font-size: 3rem; color: #ced4da;"></i>
                                    <p class="mt-2">No projects added. Click "Add Project" to get started.</p>
                                </div>
                            @else
                                @foreach($projects as $project)
                                    <div class="work-history-card p-4 mb-3 bg-white rounded shadow-sm">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="mb-1 fw-semibold text-dark">{{ $project->title }}</h5>
                                            <button type="button" class="btn btn-outline-primary btn-sm"  data-bs-toggle="modal"  data-bs-target="#projectModal" onclick="editProject({{ $project }})">Edit</button>
                                        </div>
                                        <p class="mb-1 text-dark">
                                            <strong>{{ $project->company }}</strong><br>
                                            <a href="{{ $project->project_url }}" class="text-decoration-none text-primary" target="_blank">
                                                {{ $project->project_url }}
                                            </a>
                                        </p>
                                        <p class="mb-1 text-dark">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ \Carbon\Carbon::parse($project->start_date)->format('F j, Y') }} - 
                                            {{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->format('F j, Y') : 'Present' }}
                                        </p>
                                        <p class="mt-2 text-dark">
                                            <strong>Tools:</strong> 
                                            {{ implode(', ', explode(',', $project->tools)) }}
                                        </p>
                                        <p class="mt-3 text-dark" style="line-height: 1.6;">{{ $project->description }}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <div class="card shadow-sm border-0 rounded-lg p-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="fw-bold text-primary mb-0">Hobbies/Activities</h4>
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#hobbyModal">+ Add/Edit</button>
                            </div>
                    
                            <div id="hobbyList" class="mt-3">
                                @if($hobby->isEmpty())
                                    <p class="text-muted">No hobbies added yet. Click "Add/Edit" to get started.</p>
                                @else
                                    @foreach($hobby as $hobbies)
                                        @foreach($hobbies->hobby as $individualHobby)
                                            <span class="badge bg-primary text-white me-1 mb-2 p-2"  style="font-size: 15px">{{ $individualHobby }}</span>
                                        @endforeach
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Start Skills Modal -->
                @include('skills.index')
                <!--End Skills Modal -->

                <!-- Start Experience Modal -->
                    @include('experience.index')
                <!-- End Experience Modal-->

                <!-- Start Projects Modal -->
                <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="projectModalLabel"><b>Projects</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="projectForm" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="project_title" class="form-label"><b>* Project Title</b></label>
                                                <input type="text" class="form-control " id="project_title" name="project_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company" class="form-label"><b>Company</b></label>
                                                <input type="text" class="form-control company" name="company" required>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="project_url" class="form-label"><b>Project URL</b></label>
                                                <input type="url" class="form-control" id="project_url" name="project_url">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tools" class="form-label"><b>Tools</b></label>
                                                <input type="text" class="form-control" id="tools" name="tools">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="start_date" class="form-label"><b>Duration</b></label>
                                                <div class="d-flex">
                                                    <input type="date" class="form-control me-2 start_date" name="start_date" required placeholder="From">
                                                    <input type="date" class="form-control" id="end_date_project" name="end_date" placeholder="To">
                                                </div>
                                                <div class="form-check mt-1">
                                                    <input class="form-check-input" type="checkbox" id="currently_work_here" name="currently_work_here" onchange="toggleEndDate('currently_work_here', 'end_date_project')">
                                                    <label class="form-check-label" for="currently_work_here"><b>Currently work here</b></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="description" class="form-label"><b>Description</b></label>
                                        <textarea class="form-control description" name="description" rows="4" placeholder="Describe your project..."></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- End Projects Modal -->

                <!--Start Hobby Modal -->
                    @include('hobby.index')
                <!--End Hobby Modal -->
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Start JavaScript to toggle the end date input -->
    <script>
        function toggleEndDate(checkboxId, endDateId) {
            const endDateInput = document.getElementById(endDateId);
            const checkbox = document.getElementById(checkboxId);
            if (checkbox.checked) {
                endDateInput.disabled = true;
                endDateInput.value = ''; 
            } else {
                endDateInput.disabled = false;
            }
        }
    
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('end_date_experience').disabled = false;
            document.getElementById('end_date_project').disabled = false;
        });
    </script>

    <script>
    // Clear form data for adding a new experience
    function clearForm() {
        $('#experienceModalLabel').text('Add Experience');
        $('#experienceForm')[0].reset(); 
        $('#experienceForm').attr('action', '{{ route('work_history.store') }}'); 
        $('#experienceForm').find('input[name="_method"]').remove();
        $('#currently_project_here').prop('checked', false);
        toggleEndDate('currently_project_here', 'end_date_experience');
        $('input[name="id"]').val('');
    }

    function editExperience(experience) {
        $('#experienceModalLabel').text('Edit Experience');
        $('#experienceForm').attr('action', '{{ route('work_history.update', '') }}/' + experience.id); 
        $('#experienceForm').append('<input type="hidden" name="_method" value="PUT">'); 

        $('.job_title').val(experience.job_title);
        $('.company').val(experience.company);
        $('.country').val(experience.country);
        $('.city').val(experience.city);
        $('#start_date').val(experience.start_date);
        $('#end_date_experience').val(experience.end_date);
        $('#description').val(experience.description);
        $('input[name="id"]').val(experience.id);

        // Handle checkbox for currently working
        if (experience.end_date === null) {
            $('#currently_project_here').prop('checked', true);
            toggleEndDate('currently_project_here', 'end_date_experience');
        } else {
            $('#currently_project_here').prop('checked', false);
            toggleEndDate('currently_project_here', 'end_date_experience');
        }
    }

    </script>
    <!--End JavaScript to toggle the end date input -->

    <script>
        $(document).ready(function() {
            $('.work_history_title').hover(
                function() {
                    $(this).find('.experience-edit-btn').show(); 
                }, 
                function() {
                    $(this).find('.experience-edit-btn').hide();  
                }
            );
            $('.edit-btn').click(function() {
                $('#experienceModal').modal('show');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.projectTitle').hover(
                function() {
                    $(this).find('.edit-btn-project').show(); 
                }, 
                function() {
                    $(this).find('.edit-btn-project').hide();  
                }
            );
            $('.edit-btn').click(function() {
                $('#projectModal').modal('show');
            });
        });
    </script>

    <script>
        $('#profileModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 

            var id = button.data('id');
            var firstName = button.data('first-name');
            var lastName = button.data('last-name');
            var email = button.data('email');
            var mobile = button.data('mobile');
            var state = button.data('state');
            var city = button.data('city');
            var experience = button.data('experience');
            var jobTitle = button.data('job-title');
            var currentCompany = button.data('current-company');
            var linkedin = button.data('linkedin');
            var imageSrc = button.data('image') ? '{{ asset('storage/') }}/' + button.data('image') : '{{ asset('default-avatar.png') }}';

            var modal = $(this);
            modal.find('.modal-title').text(id ? 'Edit Profile' : 'Add Profile');
            modal.find('input[name="id"]').val(id);
            modal.find('input[name="first_name"]').val(firstName);
            modal.find('input[name="last_name"]').val(lastName);
            modal.find('input[name="email"]').val(email);
            modal.find('input[name="mobile"]').val(mobile);
            modal.find('input[name="state"]').val(state);
            modal.find('input[name="city"]').val(city);
            modal.find('input[name="experience"]').val(experience);
            modal.find('input[name="job_title"]').val(jobTitle);
            modal.find('input[name="current_company"]').val(currentCompany);
            modal.find('input[name="linkedin"]').val(linkedin);
            modal.find('#imagePreview').attr('src', imageSrc); 
        });

        $('#profileImage').change(function(e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    </script>

    <!-- Start Skills jQuery -->
    <script>
        $(document).ready(function() {
        let skillCount = 1;
        
        $('#addMoreSkill').on('click', function() {
            skillCount++;
            const newSkill = `
                <div class="form-group mb-2 d-flex align-items-center">
                    <input type="checkbox" class="me-2" title="Mark as primary skill">
                    <input type="text" class="form-control me-2" name="skills[]" placeholder="Skill name" required>
                    <button type="button" class="btn btn-danger btn-sm removeSkill">&times;</button>
                </div>`;
            $('#skillInputs').append(newSkill);
        });
        
        $('#skillsForm').on('click', '.removeSkill', function() {
            $(this).parent().remove();
        });
        
        $('#saveSkills').on('click', function() {
            $('#skillsForm').submit();
        });

    });
    </script>
    <!-- Start Hobbies jQuery -->
    <script>
        $(document).ready(function() {
        let hobbyCount = 1;
        
        $('#addMoreHobby').on('click', function() {
            hobbyCount++;
            const newSkill = `
                <div class="form-group mb-2 d-flex align-items-center">
                    <input type="checkbox" class="me-2" title="Mark as primary hobby">
                    <input type="text" class="form-control me-2" name="hobby[]" placeholder="Hobby name" required>
                    <button type="button" class="btn btn-danger btn-sm removeHobby">&times;</button>
                </div>`;
            $('#hobbyInputs').append(newSkill);
        });
        
        $('#hobbyForm').on('click', '.removeHobby', function() {
            $(this).parent().remove();
        });

        $('#saveHobby').on('click', function() {
            $('#hobbyForm').submit();
        });
    
    });
    </script>
    <!-- End Hobbies jQuery -->

    <!-- Start Reference jQuery -->
    <script>
        $('#referenceModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 

            var id = button.data('id');
            var name = button.data('name');
            var company = button.data('company');
            var email = button.data('email');
            var phone = button.data('phone');

            var modal = $(this);
            modal.find('.modal-title').text(id ? 'Edit Reference' : 'Add Reference');
            modal.find('input[name="id"]').val(id);
            modal.find('input[name="name"]').val(firstName);
            modal.find('input[name="company"]').val(lastName);
            modal.find('input[name="email"]').val(email);
            modal.find('input[name="phone"]').val(mobile);
        });
    </script>
    <!-- End Reference jQuery -->


    <script>
        // Clear form data for adding a new experience
        function clearForm() {
            $('#projectModalLabel').text('Add Project');
            $('#projectForm')[0].reset(); 
            $('#projectForm').attr('action', '{{ route('projects.store') }}');
            $('#projectForm').find('input[name="_method"]').remove();
            $('#currently_project_here').prop('checked', false);
            toggleEndDate('currently_project_here', 'end_date_project');
            $('input[name="id"]').val('');
        }
    
        function editProject(project) {
            $('#projectModalLabel').text('Edit Project');
            $('#projectForm').attr('action', '{{ route('projects.update', '') }}/' + project.id); 
            $('#projectForm').append('<input type="hidden" name="_method" value="PUT">'); 

            // Populate fields
            $('#project_title').val(project.title); // Make sure the IDs match
            $('.company').val(project.company);
            $('#project_url').val(project.project_url);
            $('#tools').val(project.tools ? project.tools.split(',') : []); // Handle tools as array
            $('.start_date').val(project.start_date);
            $('#end_date_project').val(project.end_date);
            $('.description').val(project.description);
            $('input[name="id"]').val(project.id);

            // Handle checkbox for currently working
            if (project.end_date === null) {
                $('#currently_project_here').prop('checked', true);
                toggleEndDate('currently_project_here', 'end_date_project');
            } else {
                $('#currently_project_here').prop('checked', false);
                toggleEndDate('currently_project_here', 'end_date_project');
            }
        }

    
    </script>
@endsection