

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Berita
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Berita dan Informasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="pull-left">
                  <a href="<?php echo e(route('beritacreate')); ?>" class="btn btn-success">Tambahkan Berita Baru</a>
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
                                <td>Judul</td>
                                <td>Penulis</td>
                                <td>Tanggal</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                  <a href="<?php echo e(route('beritaedit',$post->id)); ?>" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo e(route('beritadelete',$post->id)); ?>" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                    <td><?php echo e($post->title); ?></td>
                                    <td><?php echo e($post->author->name); ?></td>
                                    <td><?php echo e($post->created_at); ?></td>
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
                        <?php echo e($beritas->links("pagination::bootstrap-4")); ?>

                    </ul>
                  </div>
                  <div class="pull-right">
                      <small> Jumlah Berita : <?php echo e($beritas->count()); ?> dari <?php echo e($beritas->total()); ?></small>
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
<?php echo $__env->make('layouts.backend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/admin/berita/index.blade.php ENDPATH**/ ?>