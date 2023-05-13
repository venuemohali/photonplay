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
                                <h5 class="btn-light fs-5 py-2 text-capitalize">Saved Addresses</h5>

                            </div>
                            <div class="d-md-flex gap-4 mt-5">
                               <a href="<?php echo e(route('customer.add.address.form')); ?>"> <div
                                    class="order-address text-center bg-white p-4 border d-flex flex-column align-items-center justify-content-center">
                                    <img src="<?php echo e(asset('assets/customer/images/pluse-add.png')); ?>" alt="Not Found" class="mb-4">
                                    <h6 class="text-grey">ADD NEW ADDRESS</h6>
                                    <p>Check your order status</p>
                                </div></a>
                                <?php $__currentLoopData = $user->address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="order-address text-center bg-white p-4 border mt-4 mt-md-0">
                                    <img src="<?php echo e(asset('assets/customer/images/address-review.png')); ?>" alt="Not Found" class="mb-4">
                                    <h6><?php echo e($user->name); ?></h6>
                                    <p class="mb-0"><?php echo e($address->street_number); ?></p>
                                    <p class="mb-0"><?php echo e($address->flat_suite); ?></p>
                                    <p class="mb-0"><?php echo e($address->city); ?> , <?php echo e($address->state); ?></p>
                                    <p class="mb-0"><?php echo e($address->country); ?></p>
                                    <p class="mb-0"><?php echo e($address->postcode); ?></p>
                                    <?php if($user->phone_numner): ?><p>Mobile: <?php echo e($user->phone_numner); ?></p><?php endif; ?>
                                    <p class="text-grey"><a href="<?php echo e(route('customer.edit.address', $address->id)); ?>"> Edit </a> 
                                     | <a href="<?php echo e(route('customer.delete.address', $address->id)); ?>"> Remove </a> <?php if(!$address->is_default): ?>| <a href="<?php echo e(route('customer.default.address', $address->id)); ?>"> Set as Default </a></p><?php endif; ?>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- banner end -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="" class="subscribr-form">
                        <div class="col-lg-4 mx-auto">
                            <div class="d-flex border-bottom">
                                <input type="text" placeholder="Enter your email address..."
                                    class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none">
                                <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/profile/address.blade.php ENDPATH**/ ?>