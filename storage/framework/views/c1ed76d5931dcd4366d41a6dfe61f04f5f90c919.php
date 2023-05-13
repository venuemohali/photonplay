<?php $__env->startSection('title', 'Welcome to Photon Play'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Media</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Media</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Media</h5>
                       <hr/>
                        <?php if (isset($component)) { $__componentOriginalb389da14890eaa4240d9fef8a5dced69199627a0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Product\HeaderMenu::class, ['page' => 2,'pid' => $product->id]); ?>
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

                                    <div class="col-md-12 mt-3">
                                        <h6> Product Media</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="<?php echo e(route('admin.product_media_store')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Cover Image')); ?></label>

                                            <div class="col-md-3">
                                                       <input type="file" name="cover_image" class="form-control" >

                                                        <?php $__errorArgs = ['category_selected'];
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
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">
                                                    <?php echo e(__('Upload Cover Image')); ?>

                                                </button>
                                            </div>

                                            <div class="col-md-4">
                                                <div style="height: 300px;width: 300px;" class="border d-flex align-items-center justify-content-center">
                                                    <?php if(isset($product->cover_image)): ?>
                                                    <img src="<?php echo e(asset('storage/'.$product->cover_image)); ?>" class="w-100 h-100"/>
                                                    <?php else: ?>
                                                        <p> No Image uploaded yet</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div>


                                    </form>

                                    <form method="POST" action="<?php echo e(route('admin.product_media_store_images')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="moreimage" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('More Images')); ?></label>

                                            <div class="col-md-6">
                                                <input  id="moreimage" type="file" name="images[]" class="form-control" multiple >

                                                <?php $__errorArgs = ['images'];
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
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary">
                                                    <?php echo e(__('Upload Images')); ?>

                                                </button>
                                            </div>

                                            <?php $__currentLoopData = $product_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-3 m-3" id="prodImg-<?php echo e($img->id); ?>">
                                                <div style="height: 300px;width: 300px;" class="border position-relative ">
                                                   <a href="#" onclick="deleteImg(<?php echo e($img->id); ?>)" class="position-absolute text-danger border p-1 m-1" style="right: 10px;"> <b> X </b> </a>
                                                    <img src="<?php echo e(asset('storage/'.$img->image)); ?>" class="w-100 h-100 "/>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
         function deleteImg(id) {
            console.log(id)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    const res = await fetch(`/admin/product/delete/media/images/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })

                    const deleteRes = await res.json()

                    if(deleteRes.isDeleted){
                        document.getElementById(`prodImg-${id}`).remove()


                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }}
            })
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/product/media/index.blade.php ENDPATH**/ ?>