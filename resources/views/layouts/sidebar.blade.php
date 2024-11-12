<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img
          src="{{ url('public/assets/img/hire_spot.jfif')}}" 
          alt="navbar brand"
          class="navbar-brand"
          height="20"
        />
         <div  style="color: white;">Hire Spot</div>
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item active">
          <a
            data-bs-toggle="collapse"
            href="#dashboard"
            class="collapsed"
            aria-expanded="false"
          >
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="dashboard">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ url('/') }}">
                  <span class="sub-item">Dashboard 1</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Profile</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="base">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ url('profile') }}">
                  <span class="sub-item">Create</span>
                </a>
              </li>
              <li>
                <a href="{{ url('profile.index') }}">
                  <span class="sub-item">Index</span>
                </a>
              </li>
              
            </ul>
          </div>
        </li>
        
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#tables">
            <i class="fas fa-table"></i>
            <p>Tables</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav nav-collapse">
              <li>
                <a href="tables/tables.html">
                  <span class="sub-item">Basic Table</span>
                </a>
              </li>
              <li>
                <a href="tables/datatables.html">
                  <span class="sub-item">Datatables</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        
      </ul>
    </div>
  </div>
</div>