<?php $__env->startSection('title', 'Product Publish'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Publish</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Publish</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Publish</h5>
                        <hr/>
                        <?php if (isset($component)) { $__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Product\HeaderMenu::class, ['page' => 6,'pid' => $product->id]); ?>
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

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Publish</h6>
                                    </div>
                                    <hr/>

                                    <form method="POST" action="<?php echo e(route('admin.product_publish_update',)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="status" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Change Status')); ?></label>

                                            <div class="col-md-8">
                                               <select class="form-control"  name="status">
                                                   <option value="Draft" <?php echo e($product->status=="Draft"?"selected":""); ?> >Draft </option>
                                                   <option value="Listed"  <?php echo e($product->status=="Listed"?"selected":""); ?>>Listed </option>
                                                   <option value="Unlisted"  <?php echo e($product->status=="Unlisted"?"selected":""); ?>>Unlisted </option>
                                               </select>

                                                <?php $__errorArgs = ['meta_description'];
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

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/product/publish/index.blade.php ENDPATH**/ ?>