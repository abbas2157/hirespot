<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="{{ route('website') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('website/img/hire-spot-logo.png') }}" alt="">
    </a>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        {{-- <li><a href="#portfolio">Portfolio</a></li> --}}
        <li><a href="#team">Team</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>