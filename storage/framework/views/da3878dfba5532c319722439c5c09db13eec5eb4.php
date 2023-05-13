    

    <?php $__env->startSection('title', 'Create Blog'); ?>

    <?php $__env->startSection('css'); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('style'); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('breadcrumb-title'); ?>
        <h3> Blog </h3>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('breadcrumb-items'); ?>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Blog </li>
        
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5> New Blog  </h5>
                        </div>

                        <div class="card-body ">
                            <form method="POST" action="<?php echo e(url('/admin/blogs')); ?>"  enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3 form-group">
                                    <label for="title" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Title')); ?></label>

                                    <div class="col-md-10">
                                        <input id="title" type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title') ?? $data->title ?? ''); ?>" required autocomplete="title" autofocus>

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
                                    <label for="description" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Description')); ?></label>

                                    <div class="col-md-10">
                                        <textarea id="description" type="text" class="form-control <?php $__errorArgs = ['description'];
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
                                <div class="row mb-3 form-group">
                                    <label for="keywords" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Keywords')); ?></label>

                                    <div class="col-md-10">

                                        <input
                                            id="keywords" type="text" class="form-control <?php $__errorArgs = ['keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="keywords" required autocomplete="keywords"
                                            class="form-control p-4"
                                            data-role="tagsinput"
                                        />
                                        <?php $__errorArgs = ['keywords'];
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
                                    <label for="author" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Author')); ?></label>

                                    <div class="col-md-10">
                                        <input id="author" type="text" class="form-control <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="author" value="<?php echo e(old('author') ?? $data->author ?? ''); ?>" required autocomplete="author" autofocus>

                                        <?php $__errorArgs = ['author'];
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
                                    <label for="image" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Image')); ?></label>

                                    <div class="col-md-10">
                                        <input id="image" type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" value="<?php echo e(old('image') ?? $data->image ?? ''); ?>" required autocomplete="image" autofocus>

                                        <?php $__errorArgs = ['image'];
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
                                    <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span><?php echo e(__('Category')); ?></label>

                                    <div class="col-md-10">

                                        <select id="category" name="category_selected" class="form-select form-select" aria-label=".form-select-sm">
                                            <option selected disabled>--Select Category--</option>
                                            <?php $__currentLoopData = $blog_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($b_cate->id); ?>"> <?php echo e($b_cate->category); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

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

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/blog/create.blade.php ENDPATH**/ ?>