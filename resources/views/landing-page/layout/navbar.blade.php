<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">{{ $profile->first_name ?? ''}} {{ $profile->last_name ?? ''}}</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.profile.show', $profile->user_id) }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.profile.resume', $profile->user_id) }}">Resume</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.profile.projects', $profile->user_id) }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.profile.contact', $profile->user_id) }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>