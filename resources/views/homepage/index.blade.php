@extends('homepage.layout.app')
@section('content')
    <!-- Hero Section -->
    @include('homepage.partials.hero-section')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('homepage.partials.about-section')
    <!-- /About Section -->

    <!-- Portfolio Section -->
    {{-- @include('homepage.partials.portfolio-section') --}}
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    @include('homepage.partials.team-section')
    <!-- /Team Section -->

    <!-- Services Section -->
    @include('homepage.partials.service-section')
    <!-- /Services Section -->

    <!-- Contact Section -->
    @include('homepage.partials.contact-section')
    <!-- /Contact Section --> 
@endsection