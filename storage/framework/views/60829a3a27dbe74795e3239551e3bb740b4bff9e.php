<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset('backend/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('formindex')); ?>"><i class="fa fa-circle-o"></i> List Pertanyaan</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('userindex')); ?>"><i class="fa fa-circle-o"></i> List User</a></li>
            
          </ul>
        </li>
        <?php if(Auth::user()->level === "Admin") { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('beritaindex')); ?>"><i class="fa fa-circle-o"></i> List Berita</a></li>
            <li><a href="<?php echo e(route('beritacreate')); ?>"><i class="fa fa-circle-o"></i> Buat Berita</a></li>
          </ul>
        </li>
     <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside><?php /**PATH D:\Lalapel\PWL\resources\views/layouts/backend/sidebar.blade.php ENDPATH**/ ?>