<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('backend/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>  
      <?php if(Auth::user()->level === "PIC") { ?>
      {{-- Sidebar PIC --}}
      <ul class="sidebar-menu">
        <li>
          <a href="/pic">
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
            <li><a href="{{route('formsindex')}}"><i class="fa fa-circle-o"></i> List Pertanyaan</a></li>
            {{-- <li><a href="{{route('beritacreate')}}"><i class="fa fa-circle-o"></i> Buat Berita</a></li> --}}
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
            <li><a href="{{route('usersindex')}}"><i class="fa fa-circle-o"></i> List User</a></li>
            {{-- <li><a href="{{route('beritacreate')}}"><i class="fa fa-circle-o"></i> Buat Berita</a></li> --}}
          </ul>
        </li>
      <?php } ?>

        <?php if(Auth::user()->level === "Admin") { ?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="/admin">
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
            <li><a href="{{route('formindex')}}"><i class="fa fa-circle-o"></i> List Pertanyaan</a></li>
            {{-- <li><a href="{{route('beritacreate')}}"><i class="fa fa-circle-o"></i> Buat Berita</a></li> --}}
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
            <li><a href="{{route('userindex')}}"><i class="fa fa-circle-o"></i> List User</a></li>
            {{-- <li><a href="{{route('beritacreate')}}"><i class="fa fa-circle-o"></i> Buat Berita</a></li> --}}
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('beritaindex')}}"><i class="fa fa-circle-o"></i> List Berita</a></li>
            <li><a href="{{route('beritacreate')}}"><i class="fa fa-circle-o"></i> Buat Berita</a></li>
          </ul>
        </li>
     <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>