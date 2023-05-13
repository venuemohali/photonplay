<section class="key-project pb-0">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="text-center mb-lg-5">
                <h2 class="fs-md-2 mt-3">Key Projects</h2>
                <p class="text-mutedd">Our Key Projects Across the Globe - Discover How Our Innovative Solutions are Changing the Game!</p>
            </div>
        </div>
    </div>
    <div class="key-slider mb-0">
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img src="<?php echo e(asset('storage/'.$banner->image)); ?>" alt="<?php echo e($banner->tagline); ?>" class="img-fluid w-100 h-100 slide-images-key">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</section>
<?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/components/customer/key-project.blade.php ENDPATH**/ ?>