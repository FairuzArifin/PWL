

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Pertanyaan Warga
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Form Pertanyaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h1>Halaman List Pertanyaan Warga</h1>
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
                                <td>Action</td>
                                <td>Judul</td>
                                <td>Pengirim</td>
                                <td>Status</td>
                                <td>Ditangani Oleh</td>
                                <td>Jawaban</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                  <a href="<?php echo e(route('formsedit',$form->id)); ?>" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo e(route('formsdelete',$form->id)); ?>" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                    <td><?php echo e($form->judul); ?></td>
                                    
                                    <td><?php echo e($form->name); ?></td>
                                    <td><?php echo e($form->status); ?></td>
                                    <td><?php echo e($form->PIC); ?></td>
                                    <td><?php echo e($form->jawaban); ?></td>
                                    <td><?php echo e($form->created_at); ?></td>
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
                        <?php echo e($forms->links("pagination::bootstrap-4")); ?>

                    </ul>
                  </div>
                  <div class="pull-right">
                      <small> Jumlah Pertanyaan : <?php echo e($forms->count()); ?> dari <?php echo e($forms->total()); ?></small>
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
<?php echo $__env->make('layouts.backend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/pic/form/index.blade.php ENDPATH**/ ?>