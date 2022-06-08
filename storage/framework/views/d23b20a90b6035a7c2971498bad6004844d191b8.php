

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if($berita->id==null): ?>
        Berita Baru
        <?php else: ?>
        Update Berita
        <?php endif; ?>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i>Berita dan Informasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              
              <div class="box-body ">
                <?php if($berita->id==null): ?>
                    <?php echo Form::model($berita, ['route' => 'beritastore']); ?>

                <?php else: ?>
                <?php echo Form::model($berita, [
                  'method' => 'PUT',
                  'route' => ['beritaupdate', $berita->id]]); ?>

                <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('title')?'has-error' : ''); ?>">
                        <?php echo Form::label('title'); ?>

                        <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('title')): ?>
                    <span class="help-block"><?php echo e($errors->first('title')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('slug')?'has-error' : ''); ?>">
                        <?php echo Form::label('slug'); ?>

                        <?php echo Form::text('slug', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('slug')): ?>
                    <span class="help-block"><?php echo e($errors->first('slug')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('excerpt')?'has-error' : ''); ?>">
                        <?php echo Form::label('excerpt'); ?>

                        <?php echo Form::textarea('excerpt', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('excerpt')): ?>
                    <span class="help-block"><?php echo e($errors->first('excerpt')); ?></span>
                    <?php endif; ?>
                    
                    <div class="form-group <?php echo e($errors->has('body')?'has-error' : ''); ?>">
                        <?php echo Form::label('body'); ?>

                        <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('body')): ?>
                    <span class="help-block"><?php echo e($errors->first('body')); ?></span>
                    <?php endif; ?>

                    <div class="form-group">
                        <?php echo Form::submit('Save', ['class' => 'form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                    <script>
                      tinymce.init({
                        selector: 'textarea.form-control',
                        width: 900,
                        height: 300
                      });
                    </script>
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
<?php echo $__env->make('layouts.backend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/admin/berita/create.blade.php ENDPATH**/ ?>