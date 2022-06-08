

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="background-color: rgb(9, 255, 0);">
  <div class="container py-5">
    <div class="row align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4" align="center">Website Desa A</h1><br>
        <p class="lead text-muted mb-0">Desa A adalah sebuah desa yang terletak di Kota B, Provinsi C. Adapun website ini kami bangun untuk mempermudah urusan administrasi dan penyebaran informasi dari para pengurus desa kepada masyarakat sekitar. Klik link berikut untuk memproses administrasi anda</p>
      </div>
    <div class="col-lg-6 d-none d-lg-block"><img src="img/desa.png" alt="" class="img-fluid"></div>
  </div>
</div>
</div>
<br>

<div style="background-color: rgb(10, 245, 2);">
  <div class="container py-5" align="center">
    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Fitur - Fitur</h1>
    <div class="row align-items-center py-2">
      <div class="col-lg-6">
        <h2 align="center">Form Pertanyaan</h2><br>
        <p class="lead text-muted mb-0" style="font-size: 18px;">Sebuah form telah kami sediakan untuk mempermudah anda dalam menyampaikan pertanyaan, informasi, serta keluhan tentang desa. Tenang, pasti bakal direspon kok sama para PIC</p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="img/form.png" alt="" class="img-fluid" width="350" height="350"></div>
    </div>
    <div class="container">
      <div class="row align-items-center" style="margin-top: 80px; margin-bottom: 50px">
        <div class="col-lg-6">
          <img src="img/berita.png" alt="" class="img-fluid">
        </div>
      <div class="col-lg-6 d-none d-lg-block">
          <h2 align="center">Informasi dan Berita</h2><br>
          <p class="lead text-muted mb-0" style="font-size: 18px">Di website ini kami juga menyediakan berita dan informasi seputar desa yang dibuat secara digital tanpa harus datang ke kantor pengurus. Ini memudahkan penyebaran informasi dan berita ke warga sekitar pastinya</p>             
      </div>
      </div>
    </div>
  </div>
</div>
<br>

<div style="background-color: rgb(10, 245, 2);">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Tim Kami</h2>
      </div>
    </div>
    <div class="row text-center">
      <div class="col">
        <div class="rounded shadow-sm py-5 px-4" style="background-color:rgb(107, 252, 102)"><img src="anhar.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Anhar</h5><span class="small text-uppercase text-muted">Ketua Kelompok</span>
        </div>
      </div>
      <div class="col">
        <div class="rounded shadow-sm py-5 px-4" style="background-color:rgb(107, 252, 102)"><img src="fairuz.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Fairuz</h5><span class="small text-uppercase text-muted">Anggota Kelompok</span>
        </div>
      </div>
      <div class="col">
        <div class="rounded shadow-sm py-5 px-4" style="background-color:rgb(107, 252, 102)"><img src="putri.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Putri</h5><span class="small text-uppercase text-muted">Anggota Kelompok</span>
        </div>
      </div>
      <div class="col">
        <div class="rounded shadow-sm py-5 px-4" style="background-color:rgb(107, 252, 102)"><img src="recindy.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Recindy</h5><span class="small text-uppercase text-muted">Anggota Kelompokr</span>
        </div>
      </div>
      <div class="col">
        <div class="rounded shadow-sm py-5 px-4" style="background-color:rgb(107, 252, 102)"><img src="vincent.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Vincent</h5><span class="small text-uppercase text-muted">Anggota Kelompok</span>
        </div>
      </div>
    </div>
  </div>
</div>
</div> 

<?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/dashboard/index.blade.php ENDPATH**/ ?>