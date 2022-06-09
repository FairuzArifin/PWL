

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!---->
 <div class="login-form-bg">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-8 ">
              
              <div class="form-input-content">
                  <div class="card login-form mb-0 my-5">
                      <div class="card-body pt-5">
                        <button type="button" id="sidebarCollapse" class="btn btn-info" onclick="history.back()">Kembali</button>
                          
                          <h4 class="text-center">Form Adminstrasi</h4>
  
                            <?php echo Form::model($form, [
                              'method' => 'PUT',
                              ]); ?>

            
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
            
                                <div class="form-group <?php echo e($errors->has('status')?'has-error' : ''); ?>">
                                <?php echo Form::label('Status : '); ?>

                                <select name="status" disabled>
                                  <option value="Diproses" selected>Diproses</option>
                                  <option value="Selesai">Selesai</option>
                                </select>
                                </div>
                                <?php if($errors->has('status')): ?>
                                <span class="help-block"><?php echo e($errors->first('status')); ?></span>
                                <?php endif; ?>
            
                                <div class="form-group <?php echo e($errors->has('PIC')?'has-error' : ''); ?>">
                                  <?php echo Form::label('PIC', 'Diteruskan ke : '); ?>

                                  <?php echo Form::text('PIC', null, ['class' => 'form-control', 'disabled']); ?>

                                </div>
                                <?php if($errors->has('PIC')): ?>
                                <span class="help-block"><?php echo e($errors->first('PIC')); ?></span>
                                <?php endif; ?>
            
                                <div class="form-group <?php echo e($errors->has('jawaban')?'has-error' : ''); ?>">
                                  <?php echo Form::label('jawaban'); ?>

                                  <?php echo Form::textarea('jawaban', null, ['class' => 'form-control','disabled']); ?>

                                </div>
                                <?php if($errors->has('jawaban')): ?>
                                <span class="help-block"><?php echo e($errors->first('jawaban')); ?></span>
                                <?php endif; ?>
            
                                <?php echo Form::close(); ?>

                
                          </form>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </div>
  </div>
</div>


<?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/dashboard/formAdminstrasi/lihat.blade.php ENDPATH**/ ?>