

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid py-3">
            <div class="container">
            <h3 class="text-center mb-5">APA YANG BISA KAMI BANTU?</h3>

            <div class="card-deck">
              <div class="card bg-success text-white">
                <img src="images/urus.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Form Pengurusan</h5>
                  <p class="card-text">Disini anda bisa mengurus surat seperti akte lahir, Kartu keluarga,dll</p>
                  <a href="#" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>

                <div class="card bg-success text-white">
                    <img src="images/pertanyaan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Form Pertanyaan</h5>
                      <p class="card-text">Disini anda bisa menanyakan hal apa saja seperti menanyakan dana BLT,dll</p>
                      <a href="#" class="btn btn-primary">Buat Pertanyaan</a>
                    </div>
                  </div>

                <div class="card bg-success text-white">
                    <img src="images/pengaduan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Form Pengaduan</h5>
                      <p class="card-text">Disini anda bisa melakukan pengaduan seperti jalan/jembatan rusak, lingkungan kotor, dll</p>
                      <a href="#" class="btn btn-primary">Buat Pengaduan</a>
                    </div>
                  </div>
            </div>
          </div>
        </div>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/form.blade.php ENDPATH**/ ?>