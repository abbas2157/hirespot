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