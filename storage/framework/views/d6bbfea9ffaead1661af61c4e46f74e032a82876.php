

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if($form->id==null): ?>
        Untuk Sementara Tidak Ada Pertanyaan
        <?php else: ?>
        Update Pertanyaan Warga
        <?php endif; ?>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i>Form Pertanyaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              
              <div class="box-body ">
                <?php if($form->id==null): ?>
                    <?php echo Form::model($form, ['route' => 'formstore']); ?>

                <?php else: ?>
                <?php echo Form::model($form, [
                  'method' => 'PUT',
                  'route' => ['formupdate', $form->id]]); ?>

                <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('jenis')?'has-error' : ''); ?>">
                      <?php echo Form::label('jenis'); ?>

                      <?php echo Form::text('jenis', null, ['class' => 'form-control' ,'disabled',]); ?>

                    </div>
                    <?php if($errors->has('jenis')): ?>
                      <span class="help-block"><?php echo e($errors->first('jenis')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('judul')?'has-error' : ''); ?>">
                        <?php echo Form::label('judul'); ?>

                        <?php echo Form::text('judul', null, ['class' => 'form-control' ,'disabled',]); ?>

                    </div>
                    <?php if($errors->has('judul')): ?>
                    <span class="help-block"><?php echo e($errors->first('judul')); ?></span>
                    <?php endif; ?>
                    
                    <div class="form-group <?php echo e($errors->has('deskripsi')?'has-error' : ''); ?>">
                        <?php echo Form::label('deskripsi'); ?>

                        <?php echo Form::textarea('deskripsi', null, ['class' => 'form-control','disabled',]); ?>

                    </div>
                    <?php if($errors->has('deskripsi')): ?>
                    <span class="help-block"><?php echo e($errors->first('deskripsi')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('PIC')?'has-error' : ''); ?>">
                      <?php echo Form::label('PIC', 'Diteruskan ke : '); ?>

                      <?php echo Form::text('PIC', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('PIC')): ?>
                    <span class="help-block"><?php echo e($errors->first('PIC')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('jawaban')?'has-error' : ''); ?>">
                      <?php echo Form::label('jawaban'); ?>

                      <?php echo Form::textarea('jawaban', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('jawaban')): ?>
                    <span class="help-block"><?php echo e($errors->first('jawaban')); ?></span>
                    <?php endif; ?>

                    <div class="form-group">
                        <?php echo Form::submit('Save', ['class' => 'form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                    
            
              </div>
              <!-- /.box-body -->
              
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
<?php echo $__env->make('layouts.backend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/pic/form/create.blade.php ENDPATH**/ ?>