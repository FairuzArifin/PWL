

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="background-color: rgb(9, 255, 0);">
    <div class="container py-5">
      <div class="row align-items-center py-5">

                        <article class="post-item post-detail">
                            <div class="post-item-image">
                                <a href="#">
                                    <img src="img/Post_Image_1.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-item-body">
                                <div class="padding-10">
                                    <h1><?php echo e($berita->title); ?></h1>

                                    <div class="post-meta no-border">
                                        <ul class="post-meta-group">
                                            <li><i class="fa fa-user"></i><a href="#"> <?php echo e($berita->author->name); ?></a></li>
                                            <li><i class="fa fa-clock-o"></i><time>  <?php echo e($berita->created_at); ?></time></li>
                                            <li><i class="fa fa-tags"></i><a href="#"> Berita</a></li>
                                        </ul>
                                    </div>

                                    <p><?php echo $berita->body; ?></p>
                                </div>
                            </div>
                        </article>
      </div>
    </div>
</div>
</div>


    <?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Lalapel\PWL\resources\views/dashboard/berita/tampil.blade.php ENDPATH**/ ?>