<?php $__env->startSection('title', 'Page Specifications'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3> Model </h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Create/Edit Model</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create/Edit Model </h5>
                    </div>
                    <div class="container">x`
                        <?php if (isset($component)) { $__componentOriginal7a0a18ff6c0e11fba3c5df66223fd12da855498e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\PageNavigator::class, ['page' => 3,'pid' => $id]); ?>
<?php $component->withName('Admin.PageNavigator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a0a18ff6c0e11fba3c5df66223fd12da855498e)): ?>
<?php $component = $__componentOriginal7a0a18ff6c0e11fba3c5df66223fd12da855498e; ?>
<?php unset($__componentOriginal7a0a18ff6c0e11fba3c5df66223fd12da855498e); ?>
<?php endif; ?>
                    </div>

                    <div class="card-body ">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="https://stagingserver.photonplay.com/assets/customer/images/zero-mentence.png"  class="img-fluid"/>
                        </div>

                        <form method="POST" action="<?php echo e(url('/admin/blogs')); ?>"  enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3 form-group">
                                <label for="spec" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Specification')); ?></label>

                                <div class="col-md-10">
                                    <input id="spec" type="text" class="form-control <?php $__errorArgs = ['spec'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="spec" value="<?php echo e(old('spec') ?? $data->spec ?? ''); ?>" required autocomplete="spec" autofocus>

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
                                <label for="features" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Description')); ?></label>

                                <div class="col-md-10">
                                    <textarea id="features" type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" required autocomplete="description" autofocus><?php echo e(old('description') ?? $data->description ?? ''); ?></textarea>

                                    <?php $__errorArgs = ['description'];
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
                                        <i data-feather="save"> </i>
                                        Save
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
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 500,
                // toolbar: [
                //     ['insert', ['picture']]
                // ],
                callbacks: {
                    onImageUpload: function(files) {
                        var formData = new FormData();
                        formData.append('photo', files[0]);
                        formData.append('_token', '<?php echo e(csrf_token()); ?>'); // Add CSRF token to the form data
                        $.ajax({
                            url: '<?php echo e(route('upload-photo-summernote')); ?>',
                            method: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                $('#summernote').summernote('insertImage', data.url);
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.error(textStatus + ': ' + errorThrown);
                            }
                        });
                    }
                }
            });
        });



    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script>
        $(function () {
            $('input')
                .on('change', function (event) {
                    var $element = $(event.target);
                    var $container = $element.closest('.example');

                    if (!$element.data('tagsinput')) return;

                    var val = $element.val();
                    if (val === null) val = 'null';
                    var items = $element.tagsinput('items');

                    $('code', $('pre.val', $container)).html(
                        $.isArray(val)
                            ? JSON.stringify(val)
                            : '"' + val.replace('"', '\\"') + '"'
                    );
                    $('code', $('pre.items', $container)).html(
                        JSON.stringify($element.tagsinput('items'))
                    );
                })
                .trigger('change');
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/solution_pages/page_features.blade.php ENDPATH**/ ?>