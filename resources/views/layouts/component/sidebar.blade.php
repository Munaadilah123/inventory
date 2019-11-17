 <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src={{ asset("adminLte/dist/img/AdminLTELogo.png") }} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('inventaris')}}" class="nav-link">
            <i class="fas fa-briefcase"></i>
              <p>
                Inventaris
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{url('peminjaman')}}" class="nav-link">
            <i class="fas fa-edit"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{url('pengembalian')}}" class="nav-link">
            <i class="fas fa-book"></i>
              <p>
                Pengembalian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('user')}}" class="nav-link">
            <i class="fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{url('laporan')}}" class="nav-link">
            <i class="fas fa-desktop"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>