<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin Sandang <sup>Q</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Graphic
    </div>

    <!-- Nav Item - Charts Data Donasi -->
    <li class="nav-item">
        <a class="nav-link" href="/chartsdonasi">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts Data Donasi</span></a>
        </li>

    <!-- Nav Item - Charts Volunteer -->
    <li class="nav-item">
        <a class="nav-link" href="/chartsvolunteer">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts Volunteer</span></a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages All Data</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data for Web User:</h6>
        <a class="collapse-item" href="{{route('konten')}}">Konten</a>
        <a class="collapse-item" href="/volunteer">Volunteer</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Data from User:</h6>
        <a class="collapse-item" href="/donasi">Donasi</a>
        <a class="collapse-item" href="/sk">Syarat & Ketentuan</a>
        <a class="collapse-item" href="/tracking">Tracking</a>
        </div>
    </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>