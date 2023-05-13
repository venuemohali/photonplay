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
                                <h5 class="btn-light fs-5 py-3 ">Profile Details</h5>
                                <div class="card-box border p-3">
                                    <form method="post" action="<?php echo e(route('customer.update.profile')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="mb-4">
                                            <input type="email" name="email" class="form-control shadow-none" value="<?php echo e($customer->email); ?>" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="User Name">
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" name="password" class="form-control shadow-none" value="**********"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="phone_number" class="form-control shadow-none" value="<?php echo e($customer->phone_number); ?>"
                                                id="exampleInputPassword2" placeholder="+000 00000 00000">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="company_name" class="form-control shadow-none" value="<?php echo e($customer->company_name); ?>"
                                                id="exampleInputPassword3" placeholder="Company Name">
                                        </div>

                                        <button type="submit"
                                            class="btn btn-primary rounded text-uppercase">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/customer/profile/edit_profile.blade.php ENDPATH**/ ?>