

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
                          
                          <h4 class="text-center">Form Adminstrasi</h4>
  
                          <form class="mt-5 mb-5 login-input">

                              <div class="form-group text-dark">
                                <select class="form-control"  name="jenis_kelamin" >
                                    <option value="#">Pilih Jenis Form</option>
                                    <option value="pertanyaan" name="jenis">Pertanyaan</option>
                                    <option value="permintaan" name="jenis">Permintaan</option>
                                    <option value="perngaduan" name="jenis">Pengaduan</option>
                                </select>
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" name="name" placeholder="Nama"
                                   value="<?php echo e(auth()->user()->name); ?>" required readonly>
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" name="nik" placeholder="No NIK" 
                                   value="<?php echo e(auth()->user()->nik); ?>"required readonly>
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                              </div>
  
                              <div class="form-group">
                                  <input type="text" class="form-control" name="no_hp" placeholder="Nomor Hp" required>
                              </div>

                              <div class="form-group">
                                <input type="text" class="form-control" name="Judul" placeholder="judul" required>
                              </div>

                              <div class="form-group">
                                  <p>Keterangan</p>
                                  <textarea class="px-5" name="Keterangan" cols="80%" rows="5"></textarea>
                              </div>

                               <!---Bagian PIC--->
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="PIC" placeholder="PIC" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="jawaban" placeholder="jawaban" required>
                                </div>
                              <!--------------->

                              <button class="btn login-form__btn submit w-100 btn-success">Submit</button>
                
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/dashboard/forms/index.blade.php ENDPATH**/ ?>