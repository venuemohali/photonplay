

<?php $__env->startSection('title', 'Notifications'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3> Notifications </h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Notifications </li>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Notifications  </h5>
                    </div>
                    <?php if(Session::get('notification_sent')): ?>
                        <script>
                            Swal.fire(
                                'Notifications!',
                                'Email notifications sent!',
                                'success'
                            )
                        </script>
                    <?php endif; ?>

                    <div class="card-body ">
                        <form method="POST" action="<?php echo e(route('admin.send_email_notification')); ?>"  enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>


                            <div class="row mb-3 form-group">
                                <label for="subject" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Type')); ?></label>
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" onclick="remove_seleted_user()" name="mode" id="allusers">
                                            <label class="form-check-label" for="allusers">
                                                All Users
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mode" id="selectedusers"  onclick="load_emails()" >
                                            <label class="form-check-label" for="selectedusers">
                                                Selected Users
                                            </label>
                                        </div>
                                    </div>
                            </div>

                            <div class="row mb-3 form-group justify-content-end" id="show_all_users">
                                <label for="selectusers_multi" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Select Users')); ?></label>

                                <div class="col-md-10">
                                    <input type="text" placeholder="Search emails" class="form-control" onkeyup="load_emails(this)"/>
                                    <select id="selectusers_multi" name="mySelect[]" class="form-select form-select" onchange="onSelectedKey(this)" multiple>
                                        <option class="text-center">No Data Found</option>
                                    </select>
                                    <?php $__errorArgs = ['selectusers_multi'];
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
                                <div class="col-10  d-flex  mt-2 flex-wrap" id="selectedUserEmail">
                                </div>

                            </div>

                            <div class="row mb-3 form-group">
                                <label for="subject" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Subject')); ?></label>

                                <div class="col-md-10">
                                    <input id="subject" type="text" class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="subject" value="<?php echo e(old('subject') ?? $data->subject ?? ''); ?>" required autocomplete="subject" autofocus>

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
                                <label for="summernote" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Editor')); ?></label>

                                <div class="col-md-10">
                                    <textarea id="summernote"  type="text" class="form-control <?php $__errorArgs = ['keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="body" required autocomplete="body" autofocus><?php echo e(old('body') ?? $data->body ?? ''); ?></textarea>

                                    <?php $__errorArgs = ['body'];
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
                                        <i data-feather="send"> </i>
                                        Send
                                    </button>
                                    <a href="<?php echo e(url('admin/blogs')); ?>" class="btn btn-dark">
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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/notification/notification-form.blade.php ENDPATH**/ ?>