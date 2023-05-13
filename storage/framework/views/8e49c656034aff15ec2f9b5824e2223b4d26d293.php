<?php $__env->startSection('title', 'Add Coupon'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Add Coupon</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Add Coupon</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Coupon Details</h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('admin.coupons.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3 form-group">
                                <label for="coupon_name" class="col-md-4 col-form-label text-md-end"><span>* </span><?php echo e(__('Coupon')); ?></label>

                                <div class="col-md-6">
                                    <input id="coupon_name" type="text" class="form-control <?php $__errorArgs = ['coupon_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="coupon_name" value="<?php echo e(old('coupon_name')); ?>" required autocomplete="coupon_name" placeholder="Photon50"   autofocus>

                                    <?php $__errorArgs = ['coupon_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="value" class="col-md-4 col-form-label text-md-end"><span>* </span><?php echo e(__('Value')); ?></label>

                                <div class="col-md-6">
                                    <input id="value" type="text" class="form-control <?php $__errorArgs = ['value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="value" value="<?php echo e(old('value')); ?>" required autocomplete="value" placeholder="$10 or 10%"  autofocus>

                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="type" class="col-md-4 col-form-label text-md-end"><span>* </span><?php echo e(__('Type')); ?></label>

                                <div class="col-md-6">
                                    <select id="type" name="type" class="form-select form-select" aria-label=".form-select-sm">
                                        <option selected disabled>--Select Type--</option>
                                        <option value="1">Fixed</option>
                                        <option value="2">Percentage</option>
                                    </select>

                                    <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="expiry_date" class="col-md-4 col-form-label text-md-end"><span>* </span><?php echo e(__('Expiry Date')); ?></label>

                                <div class="col-md-6">
                                    <input id="expiry_date" type="date" class="form-control <?php $__errorArgs = ['expiry_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="expiry_date" value="<?php echo e(old('expiry_date')); ?>" required autocomplete="expiry_date" placeholder="expiry date"   autofocus>

                                    <?php $__errorArgs = ['expiry_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary ">
                                        <i data-feather="save"></i>
                                        <?php echo e(__('Add Coupon')); ?>

                                    </button>
                                    <a href="<?php echo e(route('admin.coupons.index')); ?>" class="btn btn-dark">
                                        <i data-feather="corner-down-right"> </i>
                                        Return Back
                                    </a>



                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        <?php if(session()->has('success')): ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '<?php echo e(session('success')); ?>',
            showConfirmButton: false,
            timer: 1500
        })
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '<?php echo e(session('success')); ?>',
            showConfirmButton: false,
            timer: 1500
        })
        <?php endif; ?>

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/coupon/create.blade.php ENDPATH**/ ?>