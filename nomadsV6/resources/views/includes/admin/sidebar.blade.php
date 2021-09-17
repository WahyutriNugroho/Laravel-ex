 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">NOMADS Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
            <hr class="sidebar-divider">
    </li>
    <!-- Nav Item - Paket Travel -->
    <li class="nav-item ">
        {{-- memanggil controller travel-package fungsi index --}}
        <a class="nav-link" href="{{ route('travel-package.index')}}">
            <i class="fas fa-suitcase-rolling"></i>
            <span>Paket Travel</span></a>
            <hr class="sidebar-divider">
    </li>
    <!-- Nav Item - Gallery Travel -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('gallery.index')}}">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery Travel</span></a>
            <hr class="sidebar-divider">
    </li>
    <!-- Nav Item - Transaksi -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('transaction.index')}}">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Transaksi</span></a>
            <hr class="sidebar-divider">
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