<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our Hardworking Team</p>
    </div>
    <!-- End Section Title -->
    <div class="container">
        <div class="row gy-4">
            @if($profiles->isNotEmpty())
                @foreach ($profiles as $item)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('frontend.profile.show', $item->user_id) }}">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('frontend/img/team/team-1.jpg') }}" class="img-fluid" alt="">                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->first_name ?? 'First Name' }} {{ $item->last_name ?? 'Last Name' }}</h4>
                                    <span>{{ $item->mobile ?? '012345' }} </span>
                                    <span>{{ $item->job_title ?? 'Engineer' }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
