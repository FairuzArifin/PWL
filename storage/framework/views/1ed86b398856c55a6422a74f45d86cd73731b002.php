

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
                                        <h4 class="card-title">Histori Adminstrasi Warga</h4>
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
                                            <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($form->jenis); ?></td>
                                                <td><?php echo e($form->name); ?></td>
                                                <td><?php echo e($form->judul); ?></td>
                                                <td><?php echo e($form->deskripsi); ?></td>
                                                <td><?php echo e($form->alamat); ?></td>
                                                <td><?php echo e($form->no_hp); ?></td>
                                                <td><?php echo e($form->status); ?></td>
                                                <td><?php echo e($form->PIC); ?></td>
                                                <td><?php echo e($form->jawaban); ?></td>
                                                <td><?php echo e($form->created_at); ?></td>
                                            <tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/dashboard/formAdminstrasi/listform.blade.php ENDPATH**/ ?>