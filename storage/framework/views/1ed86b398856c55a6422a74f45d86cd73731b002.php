

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html>
  <head>
    <style>
    table {
        border: 1px solid lightgray;
    }
    table th {
        background-color: silver;
        text-align: center;
        padding: 5px;
        width: auto;
    }
    table td {
        border: 1px dotted silver;
        word-break: break-all;
        text-align: left;
    }
    </style>
  </head>

<div style="background-color: rgb(255, 255, 255);">
    <div class="container py-4" width="100%">
        <div class="row align-items-left ">
            <!-- List Pertanyaan Warga -->
            <h4 class="card-title"><b>Histori Adminstrasi Warga</b></h4>
            <table style="width: 100%; display: table; table-layout: fixed;" class="table table-striped table-bordered text-center table-hover table-responsive">
                <thead>
                    <tr >
                        
                        <th>Jenis</th>
                        <th>Pengirim</th>
                        <th>Judul</th>
                        <th style="width: 15%">Deskripsi</th>
                        <th>Alamat</th>
                        <th>Nomor Hp</th>
                        <th>Status</th>
                        <th>PIC</th>
                        <th>Jawaban</th>
                        <th>Tanggal Dibuat</th>
                        <th>Rincian</th>
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
                        <td><button type="button" id="sidebarCollapse" class="btn btn-info"><a href="<?php echo e(route('lihat',$form->id)); ?>">Lihat Disini</a></button></td>
                    <tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

                </div>
           </div>
        </div>
    </div>

<?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/dashboard/formAdminstrasi/listform.blade.php ENDPATH**/ ?>