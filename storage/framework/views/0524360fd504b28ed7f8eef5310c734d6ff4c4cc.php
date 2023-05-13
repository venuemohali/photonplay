<?php $__env->startSection('title', 'Welcome to Photon Play'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Pricing</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Pricing</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pricing</h5>
                        <hr/>
                        <?php if (isset($component)) { $__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Product\HeaderMenu::class, ['page' => 3,'pid' => $product->id]); ?>
<?php $component->withName('Product.HeaderMenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0)): ?>
<?php $component = $__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0; ?>
<?php unset($__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0); ?>
<?php endif; ?>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Pricing</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="<?php echo e(route('admin.product_pricing_store')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>"/>
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="cost_price" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Cost Price')); ?></label>

                                            <div class="col-md-8">
                                                <input type="text" name="cost_price" class="form-control" placeholder="$$$" value="<?php echo e(old('cost_price') ??  $product_price->cost_price ?? ''); ?>" >

                                                <?php $__errorArgs = ['cost_price'];
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

















                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="discount" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Discount')); ?></label>

                                            <div class="col-md-8">
                                                <input type="text" name="discount" class="form-control" placeholder="%" value="<?php echo e(old('discount') ??  $product_price->discount ?? ''); ?>">

                                                <?php $__errorArgs = ['discount'];
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

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="price_type_set" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Pricing Type')); ?></label>

                                            <div class="col-md-8">
                                                <select  name="price_type_set" class="form-select" >
                                                    <option selected disabled>--Select Pricing Type--</option>

                                                    <?php if($product_price): ?>
                                                        <option value="normal" <?php echo e($product_price->price_type_set=="normal"?'selected':''); ?>> Normal </option>
                                                        <option value="sale"  <?php echo e($product_price->price_type_set=="sale"?'selected':''); ?>> Sale </option>
                                                    <?php else: ?>
                                                        <option value="normal"> Normal </option>
                                                        <option value="sale"> Sale </option>
                                                    <?php endif; ?>
                                                </select>

                                                <?php $__errorArgs = ['price_type_set'];
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


                                        <div class="row ">
                                            <div class="col-md-12 d-flex justify-content-center ">
                                                <button type="submit" class="btn btn-primary d-flex align-items-center">
                                                    <i data-feather="save"> </i>
                                                    <?php echo e(__('Save')); ?>

                                                </button>
                                            </div>
                                        </div>


                                    </form>

                                </div>

                            </div>
                            <div class="col-md-6 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Quantity</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="<?php echo e(route('admin.open_quantity_store')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>"/>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="quantity" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Quantity')); ?></label>

                                            <div class="col-md-8">
                                                <input type="text" name="quantity" class="form-control" placeholder="500" value="<?php echo e(old('quantity') ??  $product_price->quantity ?? ''); ?>" >

                                                <?php $__errorArgs = ['cost_price'];
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



                                        <div class="row ">
                                            <div class="col-md-12 d-flex justify-content-center ">
                                                <button type="submit" class="btn btn-primary d-flex justify-content-center  align-items-center">
                                                    <i data-feather="save"> </i>
                                                    <?php echo e(__('Save')); ?>

                                                </button>
                                            </div>
                                        </div>


                                    </form>

                                </div>

                            </div>
                        </div>







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

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/product/pricing/index.blade.php ENDPATH**/ ?>