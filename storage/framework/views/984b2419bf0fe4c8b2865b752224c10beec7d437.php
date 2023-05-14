<?php $__env->startSection('title', 'CMS Management'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3> CMS Management</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">CMS Management</li>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> CMS Management </h5>
                    </div>

                    <div class="card-body ">

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="<?php echo e(url('admin/blog-categories')); ?>" class="btn btn-primary btn-lg btn-block w-100  d-flex align-items-center justify-content-center">
                                    <i data-feather="copy"></i>
                                    Blog Category</a>
                            </div>

                            <div class="col-md-4  mb-3">
                                <a href="<?php echo e(url('admin/blogs')); ?>" class="btn btn-primary btn-lg btn-block w-100  d-flex align-items-center justify-content-center">

                                    <i data-feather="share-2"></i>

                                    Blogs</a>
                            </div>

                            <div class="col-md-4  mb-3">
                                <a href="<?php echo e(route('admin.manage.solution.pages')); ?>" class="btn btn-primary btn-lg btn-block w-100  d-flex align-items-center justify-content-center">
                                    <i data-feather="bookmark"></i>
                                    Website Pages</a>
                            </div>

                            <div class="col-md-4  mb-3">
                                <a href="/admin/cms/clients" class="btn btn-primary btn-lg btn-block w-100 d-flex align-items-center justify-content-center">
                                    <i data-feather="command"></i>
                                    Our Clients</a>
                            </div>

                            <div class="col-md-4  mb-3">
                                <a href="<?php echo e(route('admin.team_member_index')); ?>" class="btn btn-primary btn-lg btn-block w-100 d-flex align-items-center justify-content-center">
                                    <i data-feather="user"></i>
                                    Our Team Member</a>
                            </div>

                            <div class="col-md-4  mb-3">
                                <a href="<?php echo e(route('admin.banners_index')); ?>" class="btn btn-primary btn-lg btn-block w-100 d-flex align-items-center justify-content-center">
                                    <i data-feather="user"></i>
                                    Banners</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#eye_pass').click(function(){
            if ($('#password').attr('type') == 'text') {
                $('#password').attr('type', 'password');
                $(this).html('Show');
            } else {
                $('#password').attr('type', 'text');
                $(this).html('Hide');
            }
        });
        $('#eye_c_pass').click(function(){
            if ($('#password-confirm').attr('type') == 'text') {
                $('#password-confirm').attr('type', 'password');
                $(this).html('Show');
            } else {
                $('#password-confirm').attr('type', 'text');
                $(this).html('Hide');
            }
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\photon_main\main_photo\photonplay\resources\views/cmshomepage.blade.php ENDPATH**/ ?>