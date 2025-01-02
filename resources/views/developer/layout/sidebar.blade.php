<!-- Sidebar Start -->
<div class="sidebar pb-3">
    <nav class="navbar navbar-light">
        <a href="{{ route('developer') }}" class="navbar-brand ms-3">
            <img src="{{ asset('images/logo.png') }}" style="width: 80%;" class="img-fluid me-2" alt="Logo" />
        </a>
        <div class="navbar-nav">
            <a href="{{ route('developer') }}" class="nav-item nav-link {{ request()->is('trainee') ? 'active' : '' }} text-center border-top">
                <i class="bi bi-house-up-fill"></i>
                <p class="pt-1 mb-0">Home Page</p>
            </a>
        </div>
    </nav>
</div>
<div class="positon-relative sidebar-ul">

</div>
