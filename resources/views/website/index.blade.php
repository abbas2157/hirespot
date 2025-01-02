@extends('website.layout.app')
@section('content')
    <!-- Hero Section -->
    @include('website.partials.hero-section')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('website.partials.about-section')
    <!-- /About Section -->

    <!-- Portfolio Section -->
    {{-- @include('website.partials.portfolio-section') --}}
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    {{-- @include('website.partials.team-section') --}}
    <!-- /Team Section -->

    <!-- Services Section -->
    @include('website.partials.service-section')
    <!-- /Services Section -->

    <!-- Contact Section -->
    @include('website.partials.contact-section')
    <!-- /Contact Section --> 
@endsection