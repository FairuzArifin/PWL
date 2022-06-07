<div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">Website Desa A</button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item active">
              <a class="nav-link" href="/dashboard">Halaman Utama</a>
            </li>
            <?php else: ?>
            <li class="nav-item active">
              <a class="nav-link" href="/">Halaman Utama</a>
            </li>
            <?php endif; ?>
            <li class="nav-item active">
                <a class="nav-link" href="#">Berita dan Pengumuman</a>
            </li>
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item active">
              <a class="nav-link" href="/form">Form Administrasi</a>
            </li>
            <?php endif; ?>
            <li class="nav-item active">
              <a class="nav-link" href="#">List Administrasi Warga</a>
            </li>
               
              <?php if(auth()->guard()->check()): ?>
                  <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: rgb(51, 255, 0)">
                      <i class="bi bi-person-circle fs-5"></i>
                      <?php echo e(auth()->user()->name); ?>

                    </a>
                  </li>
                  </li>
                  <li class="nav-item active">
                      <form action="/logout" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="nav-link form-control btn-dark shadow-none" style="color: rgb(255, 0, 0)">
                        <i class="bi bi-box-arrow-right fs-5"></i>
                          Logout</button>
                      </form>
                  </li>
              <?php else: ?>
                <li class="nav-item active">
                  <a class="nav-link" href="/login" style="color: rgb(51, 255, 0)">Masuk</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/register" style="color: blue">Mendaftar</a>
                </li>
              <?php endif; ?>
          </ul>
      </div>
    </nav><?php /**PATH D:\Lalapel\PWL\resources\views/layout/navbar.blade.php ENDPATH**/ ?>