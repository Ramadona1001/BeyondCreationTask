<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Beyond Task</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('movies.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Movies</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('showtimes.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Show Times</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('eventdays.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Event Days</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('attendees.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Attendees</span></a>
    </li>

</ul>
