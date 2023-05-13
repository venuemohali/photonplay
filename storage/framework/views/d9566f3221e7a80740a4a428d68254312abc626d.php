

<?php $__env->startSection('title', 'Add Specilization Option'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Add Specilization Option - <b><?php echo e($specilization->title); ?></b></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Add Specilization Option</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('admin.specilization-option.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="specilization_id" value="<?php echo e($specilization->id); ?>">
                            <div class="row mb-3 form-group">
                                <label for="title" class="col-md-4 col-form-label text-md-end"><span>* </span><?php echo e(__('Title')); ?></label>

                                <div class="col-md-6">
                                    <input id="option" type="text" class="form-control <?php $__errorArgs = ['option'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="option" value="<?php echo e(old('option')); ?>" required autocomplete="option" autofocus>

                                    <?php $__errorArgs = ['option'];
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
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Add Option')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Specilization Option</th>                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php $__empty_1 = true; $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                    <td><?php echo e($option->id); ?></td>
                                    <td><?php echo e($option->option); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.specilization-option.edit', $option->id)); ?>" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                            <i data-feather="edit"></i>
                                        </a>

                                        <a id="Delete-<?php echo e($option->id); ?>" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                        <script>
                                            $('#Delete-<?php echo e($option->id); ?>').click(function(){
                                                console.log("hello");
                                                Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'question',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!'
                                                }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = "<?php echo e(url('admin/specilization-option/delete/'.$option->id)); ?>";
                                                }
                                                });
                                            });
                                        </script>
                                    </td>
                                </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <td></td>
                                    <td>No options currently</td>
                                    <td></td>
                                    <?php endif; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->






    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/specilization_option/index.blade.php ENDPATH**/ ?>