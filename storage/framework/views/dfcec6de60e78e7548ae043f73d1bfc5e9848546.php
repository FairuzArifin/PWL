

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
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                  <a href="<?php echo e(route('usersedit',$user->id)); ?>" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo e(route('usersdelete',$user->id)); ?>" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->nik); ?></td>
                                    <td><?php echo e($user->level); ?></td>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="pull-left">
                    <ul class="pagination no-margin">
                        <?php echo e($users->links("pagination::bootstrap-4")); ?>

                    </ul>
                  </div>
                  <div class="pull-right">
                      <small> Jumlah User : <?php echo e($users->count()); ?> dari <?php echo e($users->total()); ?></small>
                  </div>
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/PIC/user/index.blade.php ENDPATH**/ ?>