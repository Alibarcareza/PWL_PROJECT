<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ganendra Giri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('storage/'.auth()->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('HomePageAdmin') }} " class="nav-link">
            <i class="bi bi-people-fill"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('DataAlatPage') }} " class="nav-link">
            <i class="bi bi-people-fill"></i>
              <p>
                Data Alat
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('ProfilePage') }}" class="nav-link {{ ($tittle === "Profile Page") ? 'active' : ''}}">
                <i class="bi bi-person-circle"></i>
                  <p> Halaman Profile</p>
                </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('DataPeminjamPage') }}" class="nav-link {{ ($tittle === "Data Peminjam") ? 'active' : ''}}">
            <i class="bi bi-person-circle"></i>
              <p>Data Peminjam</p>
            </a>
          </li>          
          <li class="nav-item bg-danger">
            <a href="{{ route('logout2') }}" class="nav-link">
              <i class="bi bi-box-arrow-in-left"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>