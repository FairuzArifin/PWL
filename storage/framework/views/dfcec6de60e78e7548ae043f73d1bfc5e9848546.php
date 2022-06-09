

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List User
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="pull-left">
                  <a href="<?php echo e(route('userscreate')); ?>" class="btn btn-success">Tambahkan User Baru</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">

                <?php if(session('message')): ?>
                <div class="alert alert-info">
                  <?php echo e(session('message')); ?>

                </div>
                <?php endif; ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Opsi</td>
                                <td>Nama</td>
                                <td>NIK</td>
                                <td>Level</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  <a href="<?php echo e(route('usersedit',Auth::user()->id)); ?>" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                    <td> <?php echo e(Auth::user()->name); ?></td>
                                    <td> <?php echo e(Auth::user()->nik); ?></td>
                                    <td> <?php echo e(Auth::user()->level); ?></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
              </div>
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/PIC/user/index.blade.php ENDPATH**/ ?>