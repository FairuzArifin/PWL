

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
            <span class="contact100-form-title">Form Pertanyaan</span>
                <div class="wrap-input100 validate-input bg1" >
                    <span class="label-input100">Nama</span>
                    <input class="input100" type="text" name="nama" placeholder="Masukan Nama Anda" required>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                    <span class="label-input100">NIK</span>
                    <input class="input100" type="text" name="nik" placeholder="Masukkan NIK Anda " required>
                </div>

                <div class="wrap-input100 input100-select bg1">
                    <span class="label-input100">Jenis Kelamin</span>
                <div>
                    <select class="form-select " name="jenis_kelamin">
                        <option>Please chooses</option>
                        <option>Laki - Laki</option>
                        <option>Perempuan</option>
                    </select>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                    <span class="label-input100">Alamat</span>
                    <input class="input100" type="text" name="alamat" placeholder="Masukkan alamat Anda " required>
                </div>
                
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Nomor Hp</span>
                    <input class="input100" type="text" name="no_hp" placeholder="Masukkan Nomor Hp Anda" required>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate">
                    <span class="label-input100">Pertanyaan</span>
                    <textarea class="input100" name="pertanyaan" placeholder="Masukkan Pertanyaan Anda"></textarea>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                    <span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>
                    </button>
                </div>
        </form>
    </div>
</div>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/formpertanyaan.blade.php ENDPATH**/ ?>