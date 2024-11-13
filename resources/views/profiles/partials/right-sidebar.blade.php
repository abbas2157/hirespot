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