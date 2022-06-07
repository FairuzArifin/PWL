<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">Website Desa A</button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Halaman Utama</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Berita dan Pengumuman</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/form">Form Administrasi</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">List Administrasi Warga</a>
            </li>
               {{-- Cek user login atau belum --}}
              @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                  </li>
                </li>
              @else
                <li class="nav-item active">
                  <a class="nav-link" href="/login" style="color: rgb(51, 255, 0)">Masuk</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/register" style="color: blue">Mendaftar</a>
                </li>
              @endauth
          </ul>
      </div>
    </nav>