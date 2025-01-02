@if(is_null(Auth::user()->email_verified_at))
    <div class="alert alert-warning" role="alert">
        First, you must complete your registration by verifing your email address, and then you'll officially be a part of the Hire Spot community
    </div>
@endif
<!-- @if ($errors->has('success'))
    <div class="container">
        <div class="alert alert-success" role="alert">{{ $errors->first('success') }}</div>
    </div>
@endif -->