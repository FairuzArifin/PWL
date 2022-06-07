

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-8">
                    <div class="form-input-content">
                        <div class="card login-form mb-0 my-5">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="#"> <h4>Form Pertanyaan</h4></a>
        
                                <form class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nama" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nik" placeholder="No NIK" required>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="jenis_kelamin" >
                                            <option value="#">Jenis Kelamin</option>
                                            <option value="laki" name="jenis_kelamin">Laki - laki</option>
                                            <option value="perempuan" name="jenis_kelamin">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="no_hp" placeholder="Nomor Hp" required>
                                    </div>

                                    <div class="form-group">
                                        <p>Pertanyaan</p>
                                        <textarea class="px-5" name="deskripsi_pertanyaan" cols="80%" rows="10"></textarea>
                                    </div>

                                    <button class="btn login-form__btn submit w-100">Submit</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/formpertanyaan.blade.php ENDPATH**/ ?>