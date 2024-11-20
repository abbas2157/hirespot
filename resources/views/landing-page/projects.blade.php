@extends('landing-page.layout.app')
@section('title')
<title>Projects | {{ $profile->first_name ?? ''}} {{ $profile->last_name ?? ''}}</title>
@stop
@section('content')
<main class="flex-shrink-0">
    <!-- Navigation-->
    @include('landing-page.layout.navbar')
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    @foreach ($projects as $projects)
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">{{ $projects->title ?? ''}}</h2>
                                        <p><a href="{{ $projects->project_url ?? ''}}">{{ $projects->project_url ?? ''}}</a></p>
                                        <p>{{ $projects->description ?? ''}}</p>
                                    </div>
                                    <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('frontend.profile.contact', $profile->user_id) }}">Contact me</a>
            </div>
        </div>
    </section>
</main>
@stop
