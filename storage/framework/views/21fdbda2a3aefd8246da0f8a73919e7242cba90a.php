

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="login-form-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-12 ">

            <div class="container-fluid">
                <div class="row" id="populer">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- List Pertanyaan Warga -->
                                    <div class="col-6 text-left">
                                        <h4 class="card-title">List Pertanyaan Warga</h4>
                                    </div>

                                    <table class ='table table-bordered text-center'>
                                        <thead>
                                            <tr>
                                                <th>Jenis</th>
                                                <th>Pengirim</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Alamat</th>
                                                <th>Nomor Hp</th>
                                                <th>Status</th>
                                                <th>PIC</th>
                                                <th>Jawaban</th>
                                                <th>Tanggal Dibuat</th>
                                            <tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
           </div>
        </div>

</div>
</div>
</div>
</div>

<?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/dashboard/formAdminstrasi/listform.blade.php ENDPATH**/ ?>