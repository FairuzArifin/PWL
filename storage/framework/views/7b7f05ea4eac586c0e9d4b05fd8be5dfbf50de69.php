

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php if($user->id==null): ?>
        Buat User Baru
        <?php else: ?>
        Update Data User
        <?php endif; ?>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i>Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              
              <div class="box-password ">
                <?php if($user->id==null): ?>
                    <?php echo Form::model($user, ['route' => 'usersstore']); ?>

                <?php else: ?>
                <?php echo Form::model($user, [
                  'method' => 'PUT',
                  'route' => ['usersupdate', $user->id]]); ?>

                <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('nik')?'has-error' : ''); ?>">
                        <?php echo Form::label('nik'); ?>

                        <?php echo Form::text('nik', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('nik')): ?>
                    <span class="help-block"><?php echo e($errors->first('nik')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('name')?'has-error' : ''); ?>">
                        <?php echo Form::label('name'); ?>

                        <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('name')): ?>
                    <span class="help-block"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('email')?'has-error' : ''); ?>">
                        <?php echo Form::label('email'); ?>

                        <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('email')): ?>
                    <span class="help-block"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                    
                    <div style="visibility: hidden">
                    <div class="form-group <?php echo e($errors->has('password')?'has-error' : ''); ?>">
                        <?php echo Form::label('password'); ?>

                        <?php echo Form::text('password', null, ['class' => 'form-control']); ?>

                    </div>
                    <?php if($errors->has('password')): ?>
                    <span class="help-block"><?php echo e($errors->first('password')); ?></span>
                    <?php endif; ?>

                    <div class="form-group <?php echo e($errors->has('level')?'has-error' : ''); ?>">
                      <?php echo Form::label('Level : '); ?>

                      <select name="level">
                        <option value="Admin">Admin</option>
                        <option value="PIC" selected>PIC</option>
                        <option value="Warga">Warga</option>
                      </select>
                      </div>
                      <?php if($errors->has('level')): ?>
                      <span class="help-block"><?php echo e($errors->first('level')); ?></span>
                      <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <?php echo Form::submit('Save', ['class' => 'form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

              </div>
              <!-- /.box-password -->
              
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
<?php echo $__env->make('layouts.backend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/PIC/user/create.blade.php ENDPATH**/ ?>