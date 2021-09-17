        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Nav Item - Travel Packages -->
             <li class="nav-item">
                <a class="nav-link" href="{{route('travel-package.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Travel Package</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Nav Item - Gallery -->
             <li class="nav-item">
                <a class="nav-link" href="{{route('gallery.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Gallety</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Nav Item - Transaction -->
             <li class="nav-item">
                <a class="nav-link" href="{{route('transaction.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Transaction</span></a>
            </li>
            <!-- Nav Item - Logout -->
    <li class="nav-item">
        <form class="nav-link" action="{{url('logout')}}"
        method="POST">
        @csrf
        <button class="btn btn-sm btn-primary shadow-sm" type="submit">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </button>
    </form>
    </li>
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
        </ul>
        <!-- End of Sidebar -->