

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="background-color: rgb(110, 60, 26);">
  <div class="container py-5">
    <div class="row align-items-center py-5">
      <div class="col-lg-6">
        <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="post-item">
            <div class="post-item-image">
                <a href="<?php echo e(route('tampil', $berita->id)); ?>">
            
                </a>
            </div>
            <div class="post-item-body">
                <div class="padding-10">
                    <h2><a href="<?php echo e(route('tampil', $berita->id)); ?>"><?php echo e($berita->title); ?></a></h2>
                    <p> <?php echo $berita->excerpt; ?> </p>
                </div>
                <div class="post-meta padding-10 clearfix">
                    <div class="pull-left">
                        <ul class="post-meta-group">
                            <li><i class="fa fa-user"></i><a href="#"> <?php echo e($berita->author->name); ?></a></li>
                            <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                            <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                            <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo e(route('tampil', $berita->id)); ?>">Continue Reading &raquo;</a>
                    </div>
                </div>
            </div>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            
           
            <nav>
              <ul class="pager">
                <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
              </ul>
            </nav>
        </div>
  
    </div>
</div>

<?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/dashboard/berita/index.blade.php ENDPATH**/ ?>