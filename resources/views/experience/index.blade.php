<div class="modal fade" id="experienceModal" tabindex="-1" aria-labelledby="experienceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="experienceModalLabel">Add Experience</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="experienceForm" action="{{ route('work_history.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="id" value="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_title" class="form-label"><b>*Job Title</b></label>
                                <input type="text" class="form-control job_title" id="job_title" name="job_title" required>
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
                                <label for="country" class="form-label"><b>Country</b></label>
                                <input type="text" class="form-control country" name="country">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city" class="form-label"><b>City</b></label>
                                <input type="text" class="form-control city" name="city">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date" class="form-label"><b>Duration</b></label>
                                <div class="d-flex">
                                    <input type="date" class="form-control me-2" id="start_date" name="start_date">
                                    <input type="date" class="form-control me-2" id="end_date_experience" name="end_date" placeholder="To">
                                </div>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="currently_project_here" name="currently_project_here" onchange="toggleEndDate('currently_project_here', 'end_date_experience')">
                                    <label class="form-check-label" for="currently_project_here"><b>Currently work here</b></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <label for="description" class="form-label"><b>Description</b></label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Describe your role, achievements, etc."></textarea>
                        </div>
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