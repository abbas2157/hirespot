<div class="col-md-3 mt-5">
    <div class="card text-center shadow-lg">
        <div class="card-body">
            @if(!is_null($profile))
                @if(!is_null($profile->image))
                    <img class="rounded-circle shadow-4-strong hire_spot_img" style="width: 50%" alt="avatar2" src="{!! asset('assets/img/hire_spot.jfif') !!}" />
                @else
                    <img class="rounded-circle shadow-4-strong hire_spot_img" style="width: 50%" alt="avatar2" src="{!! asset('assets/img/hire_spot.jfif') !!}" />
                @endif
                <h5 class="card-title">{{ $profile->first_name ?? '' }} {{ $profile->last_name ?? '' }}</h5>
                <p>{{ $profile->city }}, {{ $profile->state }}</p>
                <h6>{{ $profile->job_title }}</h6>
                <p>{{ $profile->current_company }}</p>
                <div class="social-icons">
                    <a href="{{ $profile->linkedin }}" class="btn btn-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="btn btn-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="btn btn-link"><i class="fab fa-twitter"></i></a>
                </div>
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
            @endif
        </div>
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