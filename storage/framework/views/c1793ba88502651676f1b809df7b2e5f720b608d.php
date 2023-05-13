

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
<?php $component = $__env->getContainer()->make(App\View\Components\Product\HeaderMenu::class, ['page' => 4,'pid' => $product->id]); ?>
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
                                        <h6> Product Pricing</h6>
                                    </div>
                                    <hr/>

                                    <form method="POST" action="<?php echo e(route('admin.product_seo_store')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="meta_title" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Meta Title')); ?></label>

                                            <div class="col-md-8">
                                                <input type="text" name="meta_title" class="form-control" placeholder="Title must be within 70 Character"  value="<?php echo e(old('meta_title') ??  $product_seo->meta_title ?? ''); ?>">

                                                <?php $__errorArgs = ['meta_title'];
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
                                            <label for="meta_description" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Meta Description')); ?></label>

                                            <div class="col-md-8">
                                                <textarea  name="meta_description" class="form-control" placeholder="Description must be within 150 Character" ><?php echo e(old('meta_description') ??  $product_seo->meta_description ?? ''); ?></textarea>

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

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="meta_keywords" class="col-md-3 col-form-label text-md-end"><span>* </span><?php echo e(__('Meta Keywords')); ?></label>

                                            <div class="col-md-8">
                                                <textarea  name="meta_keywords" class="form-control" placeholder="Keyword1, keyword2, keyword3, keyword4" ><?php echo e(old('meta_keywords') ??  $product_seo->meta_keywords ?? ''); ?></textarea>

                                                <?php $__errorArgs = ['meta_keywords'];
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

                                    <img src="<?php echo e(asset('assets/admin/product_seo.png')); ?>" class="w-100"/>


                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/product/seo/index.blade.php ENDPATH**/ ?>