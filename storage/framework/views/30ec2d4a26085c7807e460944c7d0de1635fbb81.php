<?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <?php if (isset($component)) { $__componentOriginal1d59dc8ce58d93599d599862c3e6f52615ed43ff = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Customer\ProfileSidebar::class, []); ?>
<?php $component->withName('customer.profile-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d59dc8ce58d93599d599862c3e6f52615ed43ff)): ?>
<?php $component = $__componentOriginal1d59dc8ce58d93599d599862c3e6f52615ed43ff; ?>
<?php unset($__componentOriginal1d59dc8ce58d93599d599862c3e6f52615ed43ff); ?>
<?php endif; ?>

                    <div class="col-lg-8  col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-3 "><?php echo e($page->title); ?></h5>
                            <div class="card-box border p-3">
                            <?php echo $page->description; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/profile/content_template.blade.php ENDPATH**/ ?>