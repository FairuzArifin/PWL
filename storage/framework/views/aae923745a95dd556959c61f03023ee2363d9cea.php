<header class="main-header">
  <!-- Logo -->
  <a href="index.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>W</b>D</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>WEBSITE</b>DESA</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a> -->

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo e(asset('backend/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo e(asset('backend/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo e(Auth::user()->name); ?>

                <small>Saya seorang Admin hehe</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <button class="btn btn-danger" type="submit">Sign Out</button>
                        <?php echo csrf_field(); ?>
                      </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header><?php /**PATH C:\Tubes\PWL\resources\views/layouts/backend/navbar.blade.php ENDPATH**/ ?>