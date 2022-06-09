

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="background-color: rgb(9, 255, 0);">
    <div class="container py-5">
    <button type="button" id="sidebarCollapse" class="btn btn-info" onclick="history.back()">Kembali</button>
        <article class="post-item post-detail">
            <div class="post-item-body">
                <div class="padding-10" align="center">
                    <h1><?php echo e($berita->title); ?></h1>
                        <ul style="color: black">
                            <li style="display: inline; margin-right: 20px"><i class="fa fa-user"></i> <?php echo e($berita->author->name); ?></li>
                            <li style="display: inline; margin-right: 20px"><i class="fa fa-clock-o"></i><time>  <?php echo e($berita->created_at); ?></time></li>
                            <li style="display: inline; margin-right: 20px"><i class="fa fa-tags"></i> Berita</li>
                        </ul>
                    <p><?php echo $berita->body; ?></p>
                </div>
            </div>
        </article>
      </div>
    </div>
</div>
</div>


    <?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/dashboard/berita/tampil.blade.php ENDPATH**/ ?>