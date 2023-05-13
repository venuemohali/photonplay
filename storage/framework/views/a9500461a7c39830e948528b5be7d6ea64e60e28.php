<section class="pt-0 pb-sm-4 pb-lg-5" >
    <div class="clints-content clints-content-banner mb-0">

        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <div class="clider-content-wrapper w-100 position-relative">
                    <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">
                        <h1><?php echo e($banner->tagline); ?></h1>
                        <h6 class="text-white"><?php echo e($banner->sub_tagline); ?></h6>
                        <a href="<?php echo e(route('customer.about.us')); ?>" class="btn btn-primary text-capitalize py-0 px-4 m-auto mt-4 mb-4 rounded-0" >About US</a>
                    </div>
                    <img src="<?php echo e(asset('storage/'.$banner->image)); ?>" alt="Not-Found" class="img-fluid w-100">
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

















































    </div>

</section>
<?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/components/customer/home-page-banner.blade.php ENDPATH**/ ?>