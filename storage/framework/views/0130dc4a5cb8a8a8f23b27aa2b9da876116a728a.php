

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="background-color: rgb(10, 245, 2);">
  <div class="container py-5">
    <h2>List Berita dan Infromasi</h2>
        <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container py-5" style="background-color: rgb(255, 255, 255); margin-top:10px">
            <div class="post-item-image">
                <a style="color: black" href="<?php echo e(route('tampil', $berita->id)); ?>">            
                </a>
            </div>
                    <h2><a href="<?php echo e(route('tampil', $berita->id)); ?>"><?php echo e($berita->title); ?></a></h2>
                    <p> <?php echo $berita->excerpt; ?> </p>
                    <ul style="color: black">
                        <li style="display: inline; margin-right: 20px"><i class="fa fa-user"></i> <?php echo e($berita->author->name); ?></li>
                        <li style="display: inline; margin-right: 20px"><i class="fa fa-clock-o"></i><time>  <?php echo e($berita->created_at); ?></time></li>
                        <li style="display: inline; margin-right: 20px"><i class="fa fa-tags"></i> Berita</li>
                        <li style="display: inline" align="right">
                          <div class="pull-right">
                            <a href="<?php echo e(route('tampil', $berita->id)); ?>">Continue Reading &raquo;</a>
                        </div>
                        </li>
                      </ul>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
</div>
</div>


</div>
</div>

<?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tubes\PWL\resources\views/dashboard/berita/index.blade.php ENDPATH**/ ?>